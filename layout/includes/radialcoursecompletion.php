<style type="text/less">
    @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic);
    .radial-progress {
        @circle-size: 70px;
        @circle-background: #d6dadc;
        @circle-color: #FF2A7E;
        @inset-size: 45px;
        @inset-color: #fbfbfb;
        @transition-length: 1s;
        @shadow: 6px 6px 10px rgba(0,0,0,0.2);
        @percentage-color: #97a71d;
        @percentage-font-size: 12px;
        @percentage-text-width: 54px;
        margin: 50px;
        width:  @circle-size;
        height: @circle-size;
        background-color: @circle-background;
        border-radius: 50%;
        .circle {
            .mask, .fill, .shadow {
                width:    @circle-size;
                height:   @circle-size;
                position: absolute;
                border-radius: 50%;
            }
            .shadow {
                box-shadow: @shadow inset;
            }
            .mask, .fill {
                -webkit-backface-visibility: hidden;
                transition: -webkit-transform @transition-length;
                transition: -ms-transform @transition-length;
                transition: transform @transition-length;
                border-radius: 50%;
            }
            .mask {
                clip: rect(0px, @circle-size, @circle-size, @circle-size/2);
                .fill {
                    clip: rect(0px, @circle-size/2, @circle-size, 0px);
                    background-color: @circle-color;
                }
            }
        }
        .inset {
            width:       @inset-size;
            height:      @inset-size;
            position:    absolute;
            margin-left: (@circle-size - @inset-size)/2;
            margin-top:  (@circle-size - @inset-size)/2;
            background-color: @inset-color;
            border-radius: 50%;
            box-shadow: @shadow;
            .percentage {
                height:   @percentage-font-size;
                width:    @percentage-text-width;
                overflow: hidden;
                position: absolute;
                top:      (@inset-size - @percentage-font-size) / 2;
                left:     (@inset-size - @percentage-text-width) / 2;
                line-height: 1;
                .numbers {
                    margin-top: -@percentage-font-size;
                    transition: width @transition-length;
                    span {
                        width:          @percentage-text-width;
                        display:        inline-block;
                        vertical-align: top;
                        text-align:     center;
                        font-weight:    800;
                        font-size:      @percentage-font-size;
                        font-family:    "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
                        color:          @percentage-color;
                    }
                }
            }
        }
        @i: 0;
        @increment: 180deg / 100;
        .loop (@i) when (@i <= 100) {
            &[data-progress="@{i}"] {
                .circle {
                    .mask.full, .fill {
                        -webkit-transform: rotate(@increment * @i);
                        -ms-transform: rotate(@increment * @i);
                        transform: rotate(@increment * @i);
                    }
                    .fill.fix {
                        -webkit-transform: rotate(@increment * @i * 2);
                        -ms-transform: rotate(@increment * @i * 2);
                        transform: rotate(@increment * @i * 2);
                    }
                }
                .inset .percentage .numbers {
                    width: @i * @percentage-text-width + @percentage-text-width;
                }
            }
            .loop(@i + 1);
        }
        .loop(@i);
    }
    .radialcompletiondisplay {
        width:auto;
        height:auto;
        margin:5px 10px;
        float:left;
    }
    .radialcompletiondisplay h4 {text-align:center;font-size: 12px;}
    .radialcompletiondisplay .radial-progress {margin:auto;}
    </style>

    <!-- Find completion numbers -->
    <?php
    global $USER, $COURSE, $DB, $CFG;
    $table1 = $CFG->prefix.'course_modules';
    $table2 = 'course_modules_completion';
    $where2 = 'userid = '.$USER->id.' AND completionstate > 0 AND coursemoduleid IN (SELECT id FROM '.$table1.' WHERE course = '.$COURSE->id.')';
    $completions = $DB->count_records_select($table2, $where2);
    $table3 = 'course_modules';
    $where3 = 'course = '.$COURSE->id.' AND completion > 0';
    $totalcompletions = $DB->count_records_select($table3, $where3);
    $percentagecompletions = 0;
    if ($totalcompletions > 0) {
        $percentagecompletions = $completions/$totalcompletions*100;
    }
    ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.6.1/less.min.js"></script>
    <script type="text/javascript">
        $(function(){
            window.randomize = function() {
            var div = document.getElementById("percentagecompletions");
            var myCompletion = div.textContent;
            $('.radial-progress').attr('data-progress', Math.floor(myCompletion));
            $('.numbers').css('visibility','visible');
        }
        setTimeout(window.randomize, 200);
        $('.radial-progress').click(window.randomize);
        });
     </script>
    <div id="percentagecompletions" style="display:none;">
        <?php echo $percentagecompletions; ?>
    </div>
    <!-- Display radial completion -->
    <div class="radialcompletiondisplay">
    
        <div class="radial-progress" data-progress="0">
            <div class="circle">
                <div class="mask full">
                    <div class="fill"></div>
                </div>
                <div class="mask half">
                    <div class="fill"></div>
                    <div class="fill fix"></div>
                </div>
                <div class="shadow"></div>
            </div>
            <div class="inset">
                <div class="percentage">
                    <div class="numbers" style="visibility:hidden"><span>-</span><span>0%</span><span>1%</span><span>2%</span><span>3%</span><span>4%</span><span>5%</span><span>6%</span><span>7%</span><span>8%</span><span>9%</span><span>10%</span><span>11%</span><span>12%</span><span>13%</span><span>14%</span><span>15%</span><span>16%</span><span>17%</span><span>18%</span><span>19%</span><span>20%</span><span>21%</span><span>22%</span><span>23%</span><span>24%</span><span>25%</span><span>26%</span><span>27%</span><span>28%</span><span>29%</span><span>30%</span><span>31%</span><span>32%</span><span>33%</span><span>34%</span><span>35%</span><span>36%</span><span>37%</span><span>38%</span><span>39%</span><span>40%</span><span>41%</span><span>42%</span><span>43%</span><span>44%</span><span>45%</span><span>46%</span><span>47%</span><span>48%</span><span>49%</span><span>50%</span><span>51%</span><span>52%</span><span>53%</span><span>54%</span><span>55%</span><span>56%</span><span>57%</span><span>58%</span><span>59%</span><span>60%</span><span>61%</span><span>62%</span><span>63%</span><span>64%</span><span>65%</span><span>66%</span><span>67%</span><span>68%</span><span>69%</span><span>70%</span><span>71%</span><span>72%</span><span>73%</span><span>74%</span><span>75%</span><span>76%</span><span>77%</span><span>78%</span><span>79%</span><span>80%</span><span>81%</span><span>82%</span><span>83%</span><span>84%</span><span>85%</span><span>86%</span><span>87%</span><span>88%</span><span>89%</span><span>90%</span><span>91%</span><span>92%</span><span>93%</span><span>94%</span><span>95%</span><span>96%</span><span>97%</span><span>98%</span><span>99%</span><span>100%</span></div>
                </div>
            </div>
        </div>
        <h4>Activity Completion</h4>
    </div>


