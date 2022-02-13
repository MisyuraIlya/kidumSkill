<div class="panel-left">


  <div class="video_block">
    <!-- paymnet block -->


    <?php if($iduser == $idsub && $statusp == 'Pending') {?>


      <!-- video -->
      <?php if(($item["choose"]) == "video"){ ?>
      <video width="800" height="550" controls controlsList="nodownload">
        <source  src="../../video/<?php echo $item["video"]; ?>" data-src="mov_bbb.ogg" type="video/mp4" >
      </video>
    <?php }elseif(($item["choose"]) == "exme") { ?>
      <!-- exeme -->
      <?php $fromq = $item["fromq"] ?>
      <?php $toq =  $item["toq"] ?>
      <?php    $cone = mysqli_connect('localhost','root');
      mysqli_select_db($cone,'kidumskillnew');
          ?>
  <div class="container">
    <div class="row scroll ">
      <div class="exme">
        <form  action="" method="post" class="exme_card" dir="rtl">
          <?php
            for ($e=$fromq; $e < $toq ; $e++) {
            $qe = "select * from questions_html where qid = $e";
            $querye = mysqli_query($cone, $qe);
            while ($rowse = mysqli_fetch_array($querye)) { ?>
              <h4 class="card-headerr">
                <?php echo $rowse['question']; ?>
              </h4>

                        <?php
            $qe = "select * from answers_html where ans_id =$e";
            $querye = mysqli_query($cone, $qe);
            while ($rowse = mysqli_fetch_array($querye) ){
            ?>
                        <div class="exme_card_body">
                          <input type="radio" name="quizcheck[<?php echo $rowse['ans_id']; ?>]" value="<?php echo $rowse['aid']; ?>" class="option-input radio">
                            <p> <?php echo $rowse['answer']; ?></p>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                        <br>
                        <div class="checkbutton">
                          <input type="submit" name="submit" value="סיים בחינה" class="btn btn-success">בדיקה</input>
                        </div>
                        <br>
                      </form>
</div>
<div class="check">


                      <!-- exme check -->
                        <?php
              if(isset($_POST['submit'])) {
              if(!empty($_POST['quizcheck'])) {
              ?>
                        <style media="screen">
                          .exme {
                            display: none;
                          }
                        </style>
                        <?php
                $count = count($_POST['quizcheck']); ?>
                <div class="answer_green_up">
                  <p>
                      <?php   echo "עניתה על 10 שאול מתוך " .$count; ?>
                      <p style="margin-left:380px;">:הציון שלכם</p>
                  </p>
                </div>


          <?php $result=0;
                $e = 1;
                $selected = $_POST['quizcheck'];
                // print_r($selected);
                $qe = "select * from questions_html";
                $querye = mysqli_query($cone, $qe);
                while($rowse = mysqli_fetch_array($querye)) {
                // print_r($rowse['ans_id']);
                $cheked = $rowse['ans_id'] == $selected[$e];
                if($cheked) {
                $result++;
                }
                $e++;
              }if($result == 0){
                  ?>
                    <br> <style media="screen">
                      #next {
                       display: none;
                      }
                    </style>
                    <div class="answer_red">
                <?php  echo " <p>0 </p>  "; ?>
                <div class="again_red">
                  <?php echo "לא עברתם תנסו שוב"; ?>
                </div></div>
                <?php
              }elseif ($result == 1){
                  ?>
                    <br> <style media="screen">
                      #next {
                       display: none;
                      }
                    </style>
                    <div class="answer_red">
                <?php  echo " <p>10 </p>  "; ?>
                <div class="again_red">
                  <?php echo "לא עברתם תנסו שוב"; ?>
                </div></div>
                <?php
                }elseif ($result == 2) {
                  echo "נכשלתם";?>

                  <style media="screen">
                    #next {
                     display: none;
                    }
                  </style>
                  <div class="answer_red">
                <?php
                  echo "<p>20</p>";
                  ?>        <div class="again_red">
                            <?php echo "לא עברתם תנסו שוב"; ?>
                          </div></div>
                <?php }elseif ($result == 3) {?>
                  <style media="screen">
                    #next {
                     display: none;
                    }
                  </style>
                  <div class="answer_red">
                <?php
                  echo "<p>30</p>";?>
                  <div class="again_red">
                    <?php echo "לא עברתם תנסו שוב"; ?>
                  </div>
                </div>


  <?php           }elseif ($result == 4) { ?>
    <style media="screen">
      #next {
       display: none;
      }
    </style>
    <div class="answer_red">
  <?php
    echo "<p>40</p>";?>
    <div class="again_red">
      <?php echo "לא עברתם תנסו שוב"; ?>
    </div>
  </div>
          <?php      }elseif ($result == 5) {?>
            <style media="screen">
              #next {
               display: none;
              }
            </style>
            <div class="answer_red">
          <?php
            echo "<p>50</p>";?>
            <div class="again_red">
              <?php echo "לא עברתם תנסו שוב"; ?>
            </div>
          </div>


<?php           }elseif ($result == 6) {?>
  <style media="screen">
    #next {
     display: none;
    }
  </style>
  <div class="answer_red">
<?php
  echo "<p>60</p>";?>
  <div class="again_red">
    <?php echo "לא עברתם תנסו שוב"; ?>
  </div>
</div>


<?php           }elseif ($result == 7) {?>
  <style media="screen">
    #next {
     display: none;
    }
  </style>
  <div class="answer_red">
<?php
  echo "<p>70</p>";?>
  <div class="again_red">
    <?php echo "לא עברתם תנסו שוב"; ?>
  </div>
</div>


<?php           }elseif ($result == 8) {?>
  <div class="success_green">
            <?php    echo "עברתם ";?>
  </div>

              <div class="answer_green">
              <?php
                echo "<p>80</p>";
                $mysqli->query("UPDATE users SET html = html+1 WHERE `username` = '".$username."' "); ?>
                </div>


<?php           }elseif ($result == 9) {?>
  <div class="success_green">
            <?php    echo "עברתם ";?>
  </div>

              <div class="answer_green">
              <?php
                echo "<p>90</p>";
                $mysqli->query("UPDATE users SET html = html+1 WHERE `username` = '".$username."' "); ?>
                </div>


<?php           }else { ?>
                <div class="answer_green">
            <?php      echo "<p> 100 </p> ";?>
                    <br>
                    </div>

                    <div class="success_100">
                <?php
                  echo "הציון שלכם 100 מתוך 100"; ?>
                   </div>
          <?php        $mysqli->query("UPDATE users SET html = html+1 WHERE `username` = '".$username."' ");
                }
                     ?>




                     <div class="again start">
                         <input type="button" value="לנסות שוב" onclick="history.back(-1)" class="btn btn-success" />
                     </div>

                            <form  action="" method="post">

                                <a href="html.php?item_id=<?php echo $item["id"]+1; ?>" class="next" id="next">המשך
                                </a>

                            </form>

                            <?php if(isset($_POST['next1'])){
                                $mysqli->query("UPDATE users SET html = html+1 WHERE `username` = '".$username."' ");

                            }else {?>


                        <?php    } ?>
                            <?php
                  }
                  }
                  ?>

                        </div>
                      </div>
                      </div>

                        <?php  }else {
                          ?>
                          <div class="container">
                            <div class="row">
                          <div class="cert_back scroll">
                            <h3>!כל הכבוד עברתם את כל הקורס</h3>
                            <br>
                            <video width="550" height="250" controls controlsList="nodownload">
                              <source  src="video/<?php echo $item["video"]; ?>" data-src="mov_bbb.ogg" type="video/mp4">
                            </video>
                            <p>כדי לקבל את התעודה</p>
                            <br>
                            <p>תלחצו על הכפתור</p>
                            <div class="certification">
                              <a href="../../cert/certhtml.php" class="">לקבלת תעודה</a>
                            </div>
                          </div>
                        </div>
                      </div>

                          <?php
                        } ?>
                        </div>


  <?php } elseif ($item["id"] > "5") { ?>
    <div class="container">
      <div class="row">
        <h4>להמשך הלמידה יש להשלים את הזמנת הקורס.</h4>
        <h4>אתם עומדים לקבל גישה לכלל הקורסים בתחום ה-WEB.</h4>
        <h4>תלמדו מהקורסים הנ"ל לבנות ולפתח אתר מקצועי מ-0 באמצעות כלים חדשים,עבודה עם DATA BASE, עיצוב ועוד."</h4>

        <div class="col-3">
          <div class="card">

          </div>
        </div>
        <div class="col-3 ">
          <div class="card">

          </div>
        </div>
        <div class="col-3 ">
          <div class="card">

          </div>
        </div>
        <div class="col-3 ">
          <div class="card">

          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-4">
          <div class="card-buy card_shadow">
            <h4>מנוי גישה לחודש אחד</h4>
            <div class="white_block">
              <p>20$</p>
            </div>
            <ul>
              <li>HTML</li>
              <li>CSS</li>
              <li>JavaScript + jQuery</li>
              <li>PHP + MySql</li>
            </ul>
            <div class="btn_buy">
                <button type="button" class="btn btn-success" onclick="window.location.href='../../buy.php'">לרכוש</button>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card-buy-center card_shadow">
              <h4>מנוי גישה לשנה 1</h4>
              <div class="white_block">
                <p>60$</p>
              </div>
              <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript + jQuery</li>
                <li>PHP + MySql</li>
              </ul>
              <div class="btn_buy">
                  <button type="button" class="btn btn-success" onclick="window.location.href='../../buy.php';">לרכוש</button>
              </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card-buy card_shadow">
            <h4>מנוי גישה לשנה 1</h4>
            <div class="white_block">
              <p>60$</p>
            </div>
            <ul>
              <li>HTML</li>
              <li>CSS</li>
              <li>JavaScript + jQuery</li>
              <li>PHP + MySql</li>
            </ul>
            <div class="btn_buy">
                <button type="button" class="btn btn-success" onclick="window.location.href='../../buy.php';">לרכוש</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php  }else { ?>
            <!-- video -->
            <?php if(($item["choose"]) == "video"){ ?>
              <video width="800" height="550" controls controlsList="nodownload" >
                <source  src="video/<?php echo $item["video"]; ?>" data-src="mov_bbb.ogg" type="video/mp4">
              </video>
            <?php }else { ?>
            <!-- exeme -->
            <?php $fromq = $item["fromq"] ?>
            <?php $toq =  $item["toq"] ?>
            <?php $num = 0; ?>
            <?php    $cone = mysqli_connect('localhost','root');
            mysqli_select_db($cone,'kidumskillnew');
                ?>
                <div class="container">
                  <div class="row scroll ">
                    <div class="exme">
        <form  action="" method="post" class="exme_card" dir="rtl">
          <div class="need_to_do">
            <h2>מבחן</h2>
            <br>
            <p>סך הכל 10 שאלות, כדי לעבור צריך ציון 80 ומעל.</p>
            <br>
            <p>בהצלחה!</p>
          </div>
                <?php
                  for ($e=$fromq; $e < $toq ; $e++) {
                  $qe = "select * from questions_html where qid = $e";
                  $querye = mysqli_query($cone, $qe);
                  while ($rowse = mysqli_fetch_array($querye)) { ?>

                                <h4 class="card-headerr">
                                <span> <?php $num++; echo "$num -"; ?> <?php echo $rowse['question']; ?> :</span>
                                </h4>

                              <?php
                  $qe = "select * from answers_html where ans_id =$e";
                  $querye = mysqli_query($cone, $qe);
                  while ($rowse = mysqli_fetch_array($querye) ){
                  ?>
                  <div class="exme_card_body">
                    <input type="radio" name="quizcheck[<?php echo $rowse['ans_id']; ?>]" value="<?php echo $rowse['aid']; ?>" class="option-input radio">
                      <p> <?php echo $rowse['answer']; ?></p>
                  </div>
                  <?php } ?>
                  <?php } ?>
                  <?php } ?>
                  <br>
                  <div class="checkbutton">
                    <input type="submit" name="submit" value="סיים בחינה" class="btn btn-success">בדיקה</input>
                  </div>
                  <br>
                </form>
                          </div>
<div class="check">
                            <!-- exme check -->
                              <?php
                    if(isset($_POST['submit'])) {
                    if(!empty($_POST['quizcheck'])) {
                    ?>
                    <?php $mysqli->query("UPDATE users SET html = html+1 WHERE `username` = '".$username."' "); ?>
                              <style media="screen">
                                .exme {
                                  display: none;
                                }
                              </style>
                              <?php
                      $count = count($_POST['quizcheck']); ?>
                      <div class="answer_green_up">
                        <p>
                            <?php   echo "עניתם על 10 שלאות מתוך" .$count; ?>
                            <p style="margin-left:380px;">:הציון שלכם</p>
                        </p>
                      </div>
                <?php      $result=0;
                      $e = 1;
                      $selected = $_POST['quizcheck'];
                      // print_r($selected);
                      $qe = "select * from questions_html";
                      $querye = mysqli_query($cone, $qe);
                      while($rowse = mysqli_fetch_array($querye)) {
                      // print_r($rowse['ans_id']);
                      $cheked = $rowse['ans_id'] == $selected[$e];
                      if($cheked) {
                      $result++;
                      }
                      $e++;
                    }if($result == 0){
                        ?>
                          <br> <style media="screen">
                            #next {
                             display: none;
                            }
                          </style>
                          <div class="answer_red">
                      <?php  echo " <p>0 </p>  "; ?>
                      <div class="again_red">
                        <?php echo "לא עברתם תנסו שוב"; ?>
                      </div></div>
                      <?php
                    }elseif ($result == 1){
                        ?>
                          <br> <style media="screen">
                            #next {
                             display: none;
                            }
                          </style>
                          <div class="answer_red">
                      <?php  echo " <p>10 </p>  "; ?>
                      <div class="again_red">
                        <?php echo "לא עברתם תנסו שוב"; ?>
                      </div></div>
                      <?php
                      }elseif ($result == 2) {
                        echo "נכשלתם";?>

                        <style media="screen">
                          #next {
                           display: none;
                          }
                        </style>
                        <div class="answer_red">
                      <?php
                        echo "<p>20</p>";
                        ?>        <div class="again_red">
                                  <?php echo "לא עברתם תנסו שוב"; ?>
                                </div></div>
                      <?php }elseif ($result == 3) {?>
                        <style media="screen">
                          #next {
                           display: none;
                          }
                        </style>
                        <div class="answer_red">
                      <?php
                        echo "<p>30</p>";?>
                        <div class="again_red">
                          <?php echo "לא עברתם תנסו שוב"; ?>
                        </div>
                      </div>


        <?php           }elseif ($result == 4) { ?>
          <style media="screen">
            #next {
             display: none;
            }
          </style>
          <div class="answer_red">
        <?php
          echo "<p>40</p>";?>
          <div class="again_red">
            <?php echo "לא עברתם תנסו שוב"; ?>
          </div>
        </div>
                <?php      }elseif ($result == 5) {?>
                  <style media="screen">
                    #next {
                     display: none;
                    }
                  </style>
                  <div class="answer_red">
                <?php
                  echo "<p>50</p>";?>
                  <div class="again_red">
                    <?php echo "לא עברתם תנסו שוב"; ?>
                  </div>
                </div>


      <?php           }elseif ($result == 6) {?>
        <style media="screen">
          #next {
           display: none;
          }
        </style>
        <div class="answer_red">
      <?php
        echo "<p>60</p>";?>
        <div class="again_red">
          <?php echo "לא עברתם תנסו שוב"; ?>
        </div>
      </div>


      <?php           }elseif ($result == 7) {?>
        <style media="screen">
          #next {
           display: none;
          }
        </style>
        <div class="answer_red">
      <?php
        echo "<p>70</p>";?>
        <div class="again_red">
          <?php echo "לא עברתם תנסו שוב"; ?>
        </div>
      </div>


      <?php           }elseif ($result == 8) {?>
        <div class="success_green">
                  <?php    echo "עברתם ";?>
        </div>

                    <div class="answer_green">
                    <?php
                      echo "<p>80</p>";
                      $mysqli->query("UPDATE users SET html = html WHERE `username` = '".$username."' "); ?>
                      </div>


      <?php           }elseif ($result == 9) {?>
        <div class="success_green">
                  <?php    echo "עברתם ";?>
        </div>

                    <div class="answer_green">
                    <?php
                      echo "<p>90</p>";
                      $mysqli->query("UPDATE users SET html = html WHERE `username` = '".$username."' "); ?>
                      </div>


      <?php           }else { ?>
                      <div class="answer_green">
                  <?php      echo "<p> 100 </p> ";?>
                          <br>
                          </div>

                          <div class="success_100">
                      <?php
                        echo "הציון שלכם 100 מתוך 100"; ?>
                         </div>
                <?php        $mysqli->query("UPDATE users SET html = html WHERE `username` = '".$username."' ");
                      }
                           ?>




                           <div class="again start">
                               <input type="button" value="לנסות שוב" onclick="history.back(-1)" class="btn btn-success" />
                           </div>

                                  <form  action="" method="post">

                                      <a href="html.php?item_id=<?php echo $item["id"]+1; ?>" class="next" id="next">המשך
                                      </a>

                                  </form>

                                  <?php if(isset($_POST['next1'])){
                                      $mysqli->query("UPDATE users SET html = html+1 WHERE `username` = '".$username."' ");

                                  }else {?>


                              <?php    } ?>
                                  <?php
                        }
                        }
                        ?>
</div>
                      </div>
                                </div>
                                <?php  } ?>
                              </div>
                              <?php } ?>
                            </div>
