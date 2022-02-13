<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- header -->


    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../../css/header.css">
  </head>
  <body>
    <?php error_reporting(0); ?>
    <?php
    $host = 'localhost';  // Хост, у нас все локально
    $user = 'root';    // Имя созданного вами пользователя
    $pass = 'root'; // Установленный вами пароль пользователю
    $db_name = 'kidumskillnew';   // Имя базы данных
    $link = mysqli_connect($host, $user, $pass, $db_name)
            or die("Ошибка " . mysqli_error($link));
            $filecookie = $_COOKIE['user'];
        $query ="SELECT * FROM users WHERE username = '$filecookie'";
        // выполняем запрос
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        //если в запросе более нуля строк
        if($result && mysqli_num_rows($result)>0)
        {
            $row = mysqli_fetch_row($result); // получаем первую строку
            $firstname = $row[3];
            $lastname = $row[4];
            $currentemail = $row[2];
            $currentpass = $row[4];
            $image_profile = $row[9];

            mysqli_free_result($result);
        }
    ?>

    <div class="container-fluid header">
      <div class="row">
        <div class="col-4 logo">
            <a href="../../index.php"><svg width="186" height="38" viewBox="0 0 186 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                  <path d="M5.49911 25.9035L3.69458 23.8251L15.5699 10.7584L15.6386 10.6732L13.7654 10.4346V8.27106H21.7913V10.4346L19.437 10.8606L5.49911 25.9035ZM14.3328 33.0759V30.9295L16.3949 30.6908L16.3777 30.6737L9.4517 21.1504L11.3421 18.5099L20.382 30.5035L22.6849 30.9295V33.0759H14.3328Z" fill="#F8F8F8"/>
                  <path d="M24.5581 33.0759V30.9295L27.3594 30.4525V17.2832L24.5581 16.8063V14.6427H30.745V30.4522L33.5463 30.9291V33.0759H24.5581ZM27.1876 10.0941V6.49933H30.745V10.0941H27.1876Z" fill="#F8F8F8"/>
                  <path d="M41.9558 33.4335C40.4434 33.4335 39.1461 33.062 38.0631 32.3178C36.9804 31.5739 36.1526 30.5373 35.5796 29.2087C35.0066 27.8801 34.7205 26.3295 34.7205 24.5578V24.1998C34.7205 22.2237 35.0066 20.4917 35.5796 19.0036C36.1526 17.5159 36.9829 16.3604 38.0715 15.5366C39.1602 14.7135 40.4663 14.3015 41.99 14.3015C43.0899 14.3015 44.0609 14.5031 44.9029 14.9061C45.7451 15.3095 46.4642 15.8914 47.0597 16.6524V9.13982L44.2584 8.66287V6.49933H47.0597H50.4453V30.4522L53.2466 30.9291V33.0759H47.5063L47.2315 30.8782C46.624 31.7187 45.8824 32.3547 45.006 32.7863C44.1296 33.2179 43.1131 33.4335 41.9558 33.4335ZM42.815 30.7079C43.823 30.7079 44.6709 30.4811 45.3586 30.0265C46.046 29.5722 46.6131 28.9306 47.0601 28.1013V19.549C46.6247 18.7769 46.0573 18.1635 45.3586 17.7092C44.66 17.2549 43.8234 17.0278 42.8495 17.0278C41.7725 17.0278 40.8845 17.3317 40.1858 17.9391C39.4871 18.5469 38.9655 19.3871 38.622 20.4607C38.2785 21.5342 38.1064 22.7805 38.1064 24.2002V24.5578C38.1064 26.4094 38.4904 27.8968 39.2577 29.0213C40.0249 30.1458 41.2107 30.7079 42.815 30.7079Z" fill="#F8F8F8"/>
                  <path d="M62.1457 33.4335C60.1293 33.4335 58.5539 32.7919 57.4195 31.5083C56.2851 30.225 55.7181 28.2262 55.7181 25.5114V17.2832L53.5869 16.8062V14.6427H55.7181H59.1036V25.5459C59.1036 27.5109 59.3958 28.8626 59.98 29.6005C60.5643 30.3388 61.4752 30.7079 62.7127 30.7079C63.9157 30.7079 64.9093 30.4668 65.6946 29.9839C66.4791 29.5014 67.0722 28.8169 67.4734 27.931V17.2832L64.9815 16.8062V14.6427H67.4734H70.859V30.4522L72.9901 30.9291V33.0759H67.8169L67.5934 30.3503C67.0092 31.3384 66.2556 32.0997 65.3334 32.6332C64.4109 33.1666 63.3487 33.4335 62.1457 33.4335Z" fill="#F8F8F8"/>
                  <path d="M74.9393 33.0759V30.9294L77.7406 30.4525V17.2832L74.9393 16.8062V14.6427H80.7827L81.0062 17.0449C81.6017 16.1705 82.3697 15.4947 83.3095 15.0174C84.2485 14.5405 85.3375 14.3018 86.5746 14.3018C87.8118 14.3018 88.8744 14.5858 89.7624 15.1535C90.6504 15.7215 91.3181 16.5732 91.7647 17.7088C92.349 16.6642 93.1223 15.8349 94.0849 15.2215C95.0475 14.6081 96.17 14.3015 97.4532 14.3015C99.3546 14.3015 100.856 14.9462 101.956 16.2351C103.056 17.5243 103.606 19.4635 103.606 22.053V30.4521L106.407 30.9291V33.0759H97.4018V30.9294L100.203 30.4525V22.0192C100.203 20.2021 99.8878 18.9157 99.2578 18.1603C98.6274 17.4053 97.694 17.0274 96.4565 17.0274C95.276 17.0274 94.3281 17.4395 93.6119 18.2625C92.896 19.086 92.4803 20.1225 92.3663 21.3716V30.4521L95.1676 30.9291V33.0759H86.179V30.9294L88.9803 30.4525V22.0192C88.9803 20.2932 88.6565 19.0294 88.0089 18.2287C87.3616 17.428 86.4251 17.0278 85.1995 17.0278C84.1683 17.0278 83.32 17.2382 82.6555 17.6582C81.991 18.0787 81.481 18.669 81.1258 19.43V30.4521L83.9275 30.9291V33.0759H74.9393Z" fill="#F8F8F8"/>
                  <path d="M0 33.0759V30.9291L2.8013 30.4522V10.9116L0 10.4346V8.27106H8.98818V10.4346L6.18687 10.9116V30.4522L8.98818 30.9291V33.0759H0Z" fill="#F8F8F8"/>
                  <path d="M119.376 33.4335C117.337 33.4335 115.526 33.2402 113.945 32.8544C112.364 32.4685 110.789 31.7417 109.219 30.6737V24.234H113.876L114.392 27.5392C114.758 27.9481 115.406 28.2918 116.334 28.5698C117.262 28.8483 118.276 28.9871 119.376 28.9871C120.144 28.9871 120.785 28.8933 121.301 28.7059C121.816 28.5186 122.206 28.2433 122.469 27.8797C122.733 27.5165 122.864 27.079 122.864 26.5678C122.864 26.0797 122.741 25.6426 122.495 25.256C122.249 24.8701 121.845 24.5037 121.283 24.1573C120.722 23.8112 119.966 23.456 119.015 23.0924C116.873 22.411 115.114 21.7184 113.739 21.014C112.364 20.3099 111.342 19.4754 110.672 18.5096C110.002 17.5442 109.666 16.346 109.666 14.9148C109.666 13.5409 110.061 12.3396 110.852 11.3117C111.642 10.2842 112.731 9.47476 114.117 8.88407C115.503 8.29373 117.09 7.98111 118.877 7.94692C120.917 7.90156 122.722 8.10323 124.291 8.55157C125.861 9.00026 127.247 9.67887 128.45 10.5874V16.5673H123.982L123.277 13.2454C122.888 13.0524 122.332 12.8762 121.61 12.7171C120.888 12.5584 120.121 12.4785 119.307 12.4785C118.609 12.4785 117.987 12.5695 117.443 12.751C116.898 12.9327 116.469 13.2056 116.154 13.5688C115.839 13.9323 115.681 14.3866 115.681 14.9316C115.681 15.3747 115.813 15.7693 116.076 16.1158C116.34 16.4622 116.804 16.8087 117.468 17.1552C118.133 17.5016 119.061 17.9022 120.252 18.3561C123.094 19.1854 125.25 20.2217 126.723 21.4651C128.195 22.7086 128.931 24.3984 128.931 26.5333C128.931 27.9983 128.53 29.245 127.728 30.2728C126.926 31.3007 125.809 32.0843 124.377 32.6237C122.945 33.1638 121.278 33.4335 119.376 33.4335Z" fill="#F8F8F8"/>
                  <path d="M152.157 33.0759V29.5834L154.339 29.0384V18.6973L151.744 18.1523V14.6427H160.372V29.0384L162.537 29.5834V33.0759H152.157ZM154.167 11.1502V6.49933H158.964V11.1502H154.167Z" fill="#F8F8F8"/>
                  <path d="M163.87 33.0759V29.5834L166.07 29.0384V10.5539L163.458 10.0089V6.49933H172.102V29.0384L174.285 29.5834V33.0759H163.87Z" fill="#F8F8F8"/>
                  <path d="M175.586 33.0759V29.5834L177.785 29.0384V10.5539L175.173 10.0089V6.49933H183.818V29.0384L186 29.5834V33.0759H175.586Z" fill="#F8F8F8"/>
                  <path d="M130.643 33.0759V29.5834L132.843 29.0384V10.5539L130.23 10.0089V6.49933H138.841V29.0384L140.611 29.5834V33.0759H130.643Z" fill="#F8F8F8"/>
                  <path d="M148.663 14.5583C148.663 16.7054 147.153 18.5574 144.331 19.0106C147.093 19.4436 148.663 21.2956 148.663 23.4424V28.5053C148.663 33.2731 149.001 35.7743 153.869 36.1288V37.8039C153.433 37.9023 152.598 38 152.161 38C148.127 38 143.854 36.8772 143.854 29.8448V24.18C143.854 24.18 143.893 21.2052 140.635 21.2052L136.352 21.2049V16.7996L140.635 16.7955C143.894 16.7955 143.854 13.8207 143.854 13.8207V8.15594C143.854 1.12312 148.127 0 152.161 0C152.598 0 153.433 0.0987394 153.869 0.197479V1.87186C149.001 2.22635 148.663 4.72832 148.663 9.49538V14.5583Z" fill="url(#paint0_linear)"/>
                  </g>
                  <defs>
                  <linearGradient id="paint0_linear" x1="137.533" y1="19" x2="153.48" y2="19" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#31F78B"/>
                  <stop offset="1" stop-color="#00E6C3"/>
                  </linearGradient>
                  <clipPath id="clip0">
                  <rect width="186" height="38" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>
            </a>
        </div>
        <?php
        if ($_COOKIE['user'] == ''):
         ?>
        <div class="col-8 right">
          <div class="btnh">
            <span class="fas fa-bars"></span>
          </div>
            <div class="verticalmenu">
              <div class="reg">
                <button type="button" class="btn btn-success" onclick="window.location.href='../.././reglogin.php'">הרשמה</button>
                <!-- <a href="./reglogin.php">הרשמה</a> -->
              </div>
              <div class="login">
                <button type="button" class="btn btn-outline-success" onclick="window.location.href='../.././reglogin.php'">כניסה</button>
                <!-- <a href="./reglogin.php" name="login">כניסה</a> -->
              </div>
              <nav class="sidebar">
                <ul class="menu">
                  <li><a href="">צור קשר</a></li>
                  <li class="space"><a href="">אודות</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      רישומים
                      </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">להזמין סמינר</a>
                          <a class="dropdown-item" href="#">וובינרם</a>
                          <a class="dropdown-item" href="#">הורדות</a>
                        </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      קורסים
                      </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="../../courses.php">תוכנה</a>
                          <a class="dropdown-item" href="#">סייבר</a>
                          <a class="dropdown-item" href="#">אימונים</a>
                        </div>
                  </li>
                </ul>
                <ul class="sidebarMenu">
                  <li>
                    <a href="#" class="feat-btn">קורסים
                      <span class="fas fa-caret-down first"></span>
                    </a>
                    <ul class="feat-show">
                      <li><a href="#">תוכנה</a></li>
                      <li><a href="#">סייבר</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#" class="serv-btn">רשומים
                      <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul class="serv-show">
                      <li><a href="#">וובינר</a></li>
                      <li><a href="#">הורדות</a></li>
                    </ul>
                  </li>
                  <li><a href="#">אודות</a></li>
                  <li><a href="#">צור קשר</a></li>
                  <li>  <ul class="sidebarmedia">
                      <li class="sidebarmedia"><a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M12.5 0C5.59611 0 0 5.59699 0 12.5001C0 19.4032 5.59603 25 12.5 25C19.404 25 25 19.4033 25 12.5001C25 5.5969 19.4039 0 12.5 0ZM7.62865 5.58099C8.35478 5.58099 8.94408 6.17021 8.94408 6.89633C8.94408 7.62246 8.35478 8.21176 7.62865 8.21176C6.90252 8.21176 6.31317 7.62251 6.31317 6.89642C6.31317 6.17029 6.90252 5.58099 7.62865 5.58099ZM8.95458 17.8441H6.32724V9.0869H8.95458V17.8441ZM19.4736 17.8433H16.8462V13.0683C16.8462 12.0888 16.562 11.1092 15.4098 11.1092C14.2576 11.1092 13.3376 12.0888 13.3376 13.0929V17.8442H10.7006V9.05809H13.3376V10.277C14.1469 9.24918 15.2878 8.78356 16.5629 8.78356C17.8389 8.78356 19.4735 9.42019 19.4736 12.8728V17.8433Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="25" height="25" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                            </a></li>
                        <li class="sidebarmedia"><a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                <path d="M12.5 0C5.59644 0 0 5.59644 0 12.5C0 19.4036 5.59644 25 12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59644 19.4036 0 12.5 0ZM15.9454 7.64733H14.1291C13.8312 7.64733 13.4123 7.79616 13.4123 8.43011V10.1202H15.9378L15.6426 12.9893H13.4121V21.1608H10.0328V12.9893H8.42549V10.1176H10.0328V8.25922C10.0328 6.93027 10.664 4.84936 13.4422 4.84936L15.9454 4.85981V7.64733H15.9454Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="25" height="25" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                </a></li>
                    </ul></li>
                </ul>
                <ul class="media_header">
                  <li><a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M12.5 0C5.59611 0 0 5.59699 0 12.5001C0 19.4032 5.59603 25 12.5 25C19.404 25 25 19.4033 25 12.5001C25 5.5969 19.4039 0 12.5 0ZM7.62865 5.58099C8.35478 5.58099 8.94408 6.17021 8.94408 6.89633C8.94408 7.62246 8.35478 8.21176 7.62865 8.21176C6.90252 8.21176 6.31317 7.62251 6.31317 6.89642C6.31317 6.17029 6.90252 5.58099 7.62865 5.58099ZM8.95458 17.8441H6.32724V9.0869H8.95458V17.8441ZM19.4736 17.8433H16.8462V13.0683C16.8462 12.0888 16.562 11.1092 15.4098 11.1092C14.2576 11.1092 13.3376 12.0888 13.3376 13.0929V17.8442H10.7006V9.05809H13.3376V10.277C14.1469 9.24918 15.2878 8.78356 16.5629 8.78356C17.8389 8.78356 19.4735 9.42019 19.4736 12.8728V17.8433Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="25" height="25" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        </a></li>
                    <li><a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M12.5 0C5.59644 0 0 5.59644 0 12.5C0 19.4036 5.59644 25 12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59644 19.4036 0 12.5 0ZM15.9454 7.64733H14.1291C13.8312 7.64733 13.4123 7.79616 13.4123 8.43011V10.1202H15.9378L15.6426 12.9893H13.4121V21.1608H10.0328V12.9893H8.42549V10.1176H10.0328V8.25922C10.0328 6.93027 10.664 4.84936 13.4422 4.84936L15.9454 4.85981V7.64733H15.9454Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="25" height="25" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                            </a></li>
                </ul>
              </nav>
          </div>
          </div>

          <?php else: ?>
            <div class="col-8 right">
              <div class="btnh">
                <span class="fas fa-bars"></span>
              </div>
                <div class="verticalmenu">
                <div class="logged">
                  <li class="nav-item dropdown user_image menu">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <?php if(empty($image_profile)) { ?>
                      <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M22.766 0C10.194 0 0 10.192 0 22.765C0 35.338 10.193 45.53 22.766 45.53C35.34 45.53 45.532 35.338 45.532 22.765C45.532 10.192 35.34 0 22.766 0ZM22.766 6.807C26.926 6.807 30.297 10.179 30.297 14.337C30.297 18.496 26.926 21.867 22.766 21.867C18.608 21.867 15.237 18.496 15.237 14.337C15.237 10.179 18.608 6.807 22.766 6.807ZM22.761 39.578C18.612 39.578 14.812 38.067 11.881 35.566C11.167 34.957 10.755 34.064 10.755 33.127C10.755 28.91 14.168 25.535 18.386 25.535H27.148C31.367 25.535 34.767 28.91 34.767 33.127C34.767 34.065 34.357 34.956 33.642 35.565C30.712 38.067 26.911 39.578 22.761 39.578Z" fill="white"/>
                      </svg>
                          <?php } else { ?>
                              <img class="" src="../../images/<?php echo $row[9]; ?>" alt="" width="50px" height="50px" style="border-radius:50%;" >
                        <?php } ?>
                      </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="../../profile.php">פרופיל</a>
                          <a class="dropdown-item" href="../../certifications.php">תעודות</a>
                          <a class="dropdown-item" href="../../mysub.php">הקניות שלי</a>
                          <a class="dropdown-item" href="../../server/Registration/exit.php">יציאה</a>
                        </div>
                  </li>
                </div>
                <div class="user_profile">
                  <p>שלום, <?=$_COOKIE['firstname']?></p>
                </div>
                <div class="diliver"><svg width="2" height="32" viewBox="0 0 2 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1" y1="5.19072e-08" x2="0.999998" y2="32" stroke="white" stroke-width="2"/>
                    </svg>
                </div>

                <!-- sidebar login -->
                <div class="loggedSidebar">
                  <div class="user_image_sidebar">
                  <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22.766 0C10.194 0 0 10.192 0 22.765C0 35.338 10.193 45.53 22.766 45.53C35.34 45.53 45.532 35.338 45.532 22.765C45.532 10.192 35.34 0 22.766 0ZM22.766 6.807C26.926 6.807 30.297 10.179 30.297 14.337C30.297 18.496 26.926 21.867 22.766 21.867C18.608 21.867 15.237 18.496 15.237 14.337C15.237 10.179 18.608 6.807 22.766 6.807ZM22.761 39.578C18.612 39.578 14.812 38.067 11.881 35.566C11.167 34.957 10.755 34.064 10.755 33.127C10.755 28.91 14.168 25.535 18.386 25.535H27.148C31.367 25.535 34.767 28.91 34.767 33.127C34.767 34.065 34.357 34.956 33.642 35.565C30.712 38.067 26.911 39.578 22.761 39.578Z" fill="white"/>
                  </svg>
                </div>
                </div>
                <div class="user_profile_sidebar">
                  <p>שלום, <?=$_COOKIE['user']  ?></p>
                </div>
                <div class="diliver_sidebar"><svg width="326" height="2" viewBox="0 0 226 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <line x1="326" y1="1" y2="1" stroke="white" stroke-width="2"/>
                                  </svg>

                </div>

                <!-- end sidebar login -->
                <nav class="sidebar">
                  <ul class="menu">
                    <li><a href="">צור קשר</a></li>
                    <li class="space"><a href="">אודות</a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        רישומים
                        </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">להזמין סמינר</a>
                            <a class="dropdown-item" href="#">וובינרם</a>
                            <a class="dropdown-item" href="#">הורדות</a>
                          </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        קורסים
                        </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../../courses.php">תוכנה</a>
                            <a class="dropdown-item" href="#">סייבר</a>
                            <a class="dropdown-item" href="#">אימונים</a>
                          </div>
                    </li>
                  </ul>
                  <ul class="sidebarMenu">
                    <li>
                      <a href="profile.php" class="profile-btn">פרופיל
                        <span class="fas fa-caret-down first"></span>
                      </a>
                      <ul class="profile-show">
                        <li><a href="../../certifications.php">תעודות</a></li>
                        <li><a href="#">קניות שלי</a></li>
                        <li><a href="#">יציאה</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#" class="feat-btn">קורסים
                        <span class="fas fa-caret-down first"></span>
                      </a>
                      <ul class="feat-show">
                        <li><a href="#">תוכנה</a></li>
                        <li><a href="#">סייבר</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#" class="serv-btn">רשומים
                        <span class="fas fa-caret-down second"></span>
                      </a>
                      <ul class="serv-show">
                        <li><a href="#">וובינר</a></li>
                        <li><a href="#">הורדות</a></li>
                      </ul>
                    </li>
                    <li><a href="#">אודות</a></li>
                    <li><a href="#">צור קשר</a></li>
                    <li>  <ul class="sidebarmedia">
                        <li class="sidebarmedia"><a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0)">
                              <path d="M12.5 0C5.59611 0 0 5.59699 0 12.5001C0 19.4032 5.59603 25 12.5 25C19.404 25 25 19.4033 25 12.5001C25 5.5969 19.4039 0 12.5 0ZM7.62865 5.58099C8.35478 5.58099 8.94408 6.17021 8.94408 6.89633C8.94408 7.62246 8.35478 8.21176 7.62865 8.21176C6.90252 8.21176 6.31317 7.62251 6.31317 6.89642C6.31317 6.17029 6.90252 5.58099 7.62865 5.58099ZM8.95458 17.8441H6.32724V9.0869H8.95458V17.8441ZM19.4736 17.8433H16.8462V13.0683C16.8462 12.0888 16.562 11.1092 15.4098 11.1092C14.2576 11.1092 13.3376 12.0888 13.3376 13.0929V17.8442H10.7006V9.05809H13.3376V10.277C14.1469 9.24918 15.2878 8.78356 16.5629 8.78356C17.8389 8.78356 19.4735 9.42019 19.4736 12.8728V17.8433Z" fill="white"/>
                              </g>
                              <defs>
                              <clipPath id="clip0">
                              <rect width="25" height="25" fill="white"/>
                              </clipPath>
                              </defs>
                              </svg>
                              </a></li>
                          <li class="sidebarmedia"><a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0)">
                                  <path d="M12.5 0C5.59644 0 0 5.59644 0 12.5C0 19.4036 5.59644 25 12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59644 19.4036 0 12.5 0ZM15.9454 7.64733H14.1291C13.8312 7.64733 13.4123 7.79616 13.4123 8.43011V10.1202H15.9378L15.6426 12.9893H13.4121V21.1608H10.0328V12.9893H8.42549V10.1176H10.0328V8.25922C10.0328 6.93027 10.664 4.84936 13.4422 4.84936L15.9454 4.85981V7.64733H15.9454Z" fill="white"/>
                                  </g>
                                  <defs>
                                  <clipPath id="clip0">
                                  <rect width="25" height="25" fill="white"/>
                                  </clipPath>
                                  </defs>
                                  </svg>
                                  </a></li>
                      </ul></li>
                  </ul>
                  <ul class="media_header">
                    <li><a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0)">
                          <path d="M12.5 0C5.59611 0 0 5.59699 0 12.5001C0 19.4032 5.59603 25 12.5 25C19.404 25 25 19.4033 25 12.5001C25 5.5969 19.4039 0 12.5 0ZM7.62865 5.58099C8.35478 5.58099 8.94408 6.17021 8.94408 6.89633C8.94408 7.62246 8.35478 8.21176 7.62865 8.21176C6.90252 8.21176 6.31317 7.62251 6.31317 6.89642C6.31317 6.17029 6.90252 5.58099 7.62865 5.58099ZM8.95458 17.8441H6.32724V9.0869H8.95458V17.8441ZM19.4736 17.8433H16.8462V13.0683C16.8462 12.0888 16.562 11.1092 15.4098 11.1092C14.2576 11.1092 13.3376 12.0888 13.3376 13.0929V17.8442H10.7006V9.05809H13.3376V10.277C14.1469 9.24918 15.2878 8.78356 16.5629 8.78356C17.8389 8.78356 19.4735 9.42019 19.4736 12.8728V17.8433Z" fill="white"/>
                          </g>
                          <defs>
                          <clipPath id="clip0">
                          <rect width="25" height="25" fill="white"/>
                          </clipPath>
                          </defs>
                          </svg>
                          </a></li>
                      <li><a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0)">
                              <path d="M12.5 0C5.59644 0 0 5.59644 0 12.5C0 19.4036 5.59644 25 12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59644 19.4036 0 12.5 0ZM15.9454 7.64733H14.1291C13.8312 7.64733 13.4123 7.79616 13.4123 8.43011V10.1202H15.9378L15.6426 12.9893H13.4121V21.1608H10.0328V12.9893H8.42549V10.1176H10.0328V8.25922C10.0328 6.93027 10.664 4.84936 13.4422 4.84936L15.9454 4.85981V7.64733H15.9454Z" fill="white"/>
                              </g>
                              <defs>
                              <clipPath id="clip0">
                              <rect width="25" height="25" fill="white"/>
                              </clipPath>
                              </defs>
                              </svg>
                              </a></li>
                  </ul>
                </nav>
                <ul class="media_header">
                  <li><a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M12.5 0C5.59611 0 0 5.59699 0 12.5001C0 19.4032 5.59603 25 12.5 25C19.404 25 25 19.4033 25 12.5001C25 5.5969 19.4039 0 12.5 0ZM7.62865 5.58099C8.35478 5.58099 8.94408 6.17021 8.94408 6.89633C8.94408 7.62246 8.35478 8.21176 7.62865 8.21176C6.90252 8.21176 6.31317 7.62251 6.31317 6.89642C6.31317 6.17029 6.90252 5.58099 7.62865 5.58099ZM8.95458 17.8441H6.32724V9.0869H8.95458V17.8441ZM19.4736 17.8433H16.8462V13.0683C16.8462 12.0888 16.562 11.1092 15.4098 11.1092C14.2576 11.1092 13.3376 12.0888 13.3376 13.0929V17.8442H10.7006V9.05809H13.3376V10.277C14.1469 9.24918 15.2878 8.78356 16.5629 8.78356C17.8389 8.78356 19.4735 9.42019 19.4736 12.8728V17.8433Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="25" height="25" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        </a></li>
                    <li><a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M12.5 0C5.59644 0 0 5.59644 0 12.5C0 19.4036 5.59644 25 12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59644 19.4036 0 12.5 0ZM15.9454 7.64733H14.1291C13.8312 7.64733 13.4123 7.79616 13.4123 8.43011V10.1202H15.9378L15.6426 12.9893H13.4121V21.1608H10.0328V12.9893H8.42549V10.1176H10.0328V8.25922C10.0328 6.93027 10.664 4.84936 13.4422 4.84936L15.9454 4.85981V7.64733H15.9454Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="25" height="25" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                            </a></li>
                </ul>
              </div>
              </div>
            </div>

                <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- header -->
    <script>
      $('.btnh').click(function(){
        $(this).toggleClass("click");
        $('.verticalmenu').toggleClass("show");
      });
        $('.feat-btn').click(function(){
          $('nav ul .feat-show').toggleClass("show");
          $('nav ul .first').toggleClass("rotate");
        });
        $('.serv-btn').click(function(){
          $('nav ul .serv-show').toggleClass("show1");
          $('nav ul .second').toggleClass("rotate");
        });
        $('.profile-btn').click(function(){
          $('nav ul .profile-show').toggleClass("show2");
          $('nav ul .second').toggleClass("rotate");
        });
        $('nav ul li').click(function(){
          $(this).addClass("active").siblings().removeClass("active");
        });
    </script>
    <!-- end header -->
  </body>
</html>
