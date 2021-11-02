<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Vize ve final notu hesaplama</title>
	<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="wrapper">
    <form class="form-signin" action="index.php" method ="post">       
      <center><h2 class="form-signin-heading">~~ VİZE FİNAL ~~</h2></center>

      <input type="text" class="form-control" name="s1" placeholder="Vize  Notu" autofocus="" />
      <input type="text" class="form-control" name="s2" placeholder="Final  Notu" />

       <label class="checkbox">
        <input type="checkbox" value="Çan eğrisi" id="canegrisi" name="canegrisi"> Çan eğrisi
      </label> 

      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Hesapla" name="kontrol"/>
    </form>
  </div>

  <?php
               if(isset($_POST["kontrol"]))
               {
                  #code....
                  $vize   = $_POST["s1"];
                  $final  = $_POST["s2"];
                  if (empty($vize) || empty($final))
                  {
                    #code....
                    echo "Vize ve final notunuzu boş bırakmayınız!";
                    die();
                  }

                  $not = $vize * 0.4 + $final * 0.6;

                   if ($_POST == TRUE)
                    {
                      #code....
                      if ($vize != "" || $final != "")
                      {
                          #code....
                          if ($not < 0 || $not > 100 )
                          {
                            #code....
                            die('<br/> <font color="red">notu 0 ile 100 arasında girin!</font>');
                          }

                          else
                          {
                              echo "<center><font size=14>";
                              #code....
                              if ($not >=0 && $not <=29)
                              {
                                #code....
                                echo '<br/> Notunuz:<strong><font color="red"> FF</font></strong>';
                              }
                              else if ($not >=30 && $not <=59)
                              {
                                #code....
                                echo '<br/> Notunuz:<strong><font color="red"> DD</font></strong>';
                              }
                              else if ($not >=60 && $not <=67)
                              {
                                #code....
                                echo '<br/> Notunuz:<strong><font color="green"> CC</font></strong>';
                              }
                              else if ($not >=68 && $not <=75)
                              {
                                #code....
                                echo '<br/> Notunuz:<strong><font color="green"> CB</font></strong>';
                              }
                              else if ($not>=76 && $not <=83)
                              {
                                #code....
                                echo '<br/> Notunuz:<strong><font color="green"> BB</font></strong>';
                              }
                              else if ($not >=84 && $not <=91)
                              {
                                #code....
                                echo '<br/> Notunuz:<strong><font color="green"> BA</font></strong>';
                              }
                              else if ($not >=92 && $not <=100)
                              {
                                #code....
                                echo '<br/> Notunuz:<strong><font color="green"> AA -> Tebrikler</font></strong>';
                              }
							  
                           }	 
                        }
			else
                      {
                        #code....
                        die('<br/> <font color="red">Geçerli bir not girin.</font>');
                      }
                    }

                   if($not >= 60 && $final >= 60)
                   {
                     #code....
                       echo "<h1 class='text-info'>$not , GEÇTİNİZ</h1>";
                   }
                   else
                   {
                     #code....
                     echo "<h1 class='text-danger'>$not , KALDINIZ!</h1>";
                   }
               }
  ?>
</body>
</html>









