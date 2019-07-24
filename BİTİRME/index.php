<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <title>HIPAA Anketi</title>

                                        
   
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">        
  <link rel="stylesheet" href="css/bootstrap.min.css">                                          
  <link rel="stylesheet" href="css/fontawesome-all.min.css">                                      
  <link rel="stylesheet" href="css/tooplate-style.css">      
  <style type="text/css">
  <?php 
    $durum = $_GET['status'];

    if($durum == 2){
    echo "
    .swal-overlay {
    background-color: rgba(0, 147, 3, 0.85); 
    ";
    }
    else if ($durum == 1){
    echo "
    .swal-overlay {
    background-color: rgba(247, 254, 132, 0.85); 
    ";
    }
    else if ($durum == 0){
    echo "
    .swal-overlay {
    background-color: rgba(255, 30, 38, 0.85); 
    ";
    }
    else{
    echo "";
    }
  ?>
        
      }
  </style>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    var renderPage = true;

    if (navigator.userAgent.indexOf('MSIE') !== -1
      || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
      alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      renderPage = false;
    }
 
  </script>



</head>

<body>

  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
    
  <div class="tm-container">
    <div class="tm-container-inner">
         <header>             
        <div class="col-xs-12 tm-bg-black-alpha tm-text-white text-center color-heder">
          <h1 class="mb-4">HIPAA</h1>
          <p class="mb-0 tm-site-tagline">Bilgileriniz ve cevaplarınız, güvenli bir şekilde bizde tutulacak.</p>
             
        </div>
        </header>
        <?php
          if(isset($_GET['status'])){ 
            $durum = $_GET['status'];

            if($durum == 2){
              echo "<script type=\"text/javascript\">
              swal({
              title: \"GÜVENLİ\",
              icon : \"success\"
              });
              </script>";
            }
          else if ($durum == 1){
            echo "
            <script type=\"text/javascript\"> 
            swal({ 
            title: \"AZ GÜVENLİ\",
            icon : \"warning\", 
            });
            </script>";
            }
          else if ($durum == 0){
            echo "
            <script type=\"text/javascript\">
            swal({ 
            title: \"GÜVENSİZ\",
            icon : \"error\"
            });
            </script>";
            }
          else{
            echo "";
            }
          }
        ?>
      <section class="tm-text-section">
        <div class="tm-timelines">
          <h2 class="color-Timeline mb-5">Anketimizin Hakkında:</h2>
          <p class="mb-0 tm-site-tagline">Hazırladığımız sorular HIPPA standartlarına göre oluşuruldu. Projemizin amacı hastanelerde hastaların mahremiyet konusundaki görüşlerini toplayıp, verileri kullanarak gerekirse durumu iyileştirmek için bir takım adımlar atılmasını sağlamaktır. Bu anketi tamamladığınzda, cevaplarınza göre verilerinizin tehlikde olup olmadığını görüntüleyebilirsiniz.</p>
          <h2 class="color-Timeline mb-5">Sorular:</h2>
          <div class="tm-timelines-inner">
            <div class="tm-timeline-white-bar"></div>
            <div class="tm-timeline-circle"></div>
   <form action="kontrol.php" method="POST">
            <div class="tm-timeline mb-4 tm-first-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-1"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-1">
                  <h5 class="mt-0 tm-text-green"> Adınız ve Soyadınız nedir ?</h5>
                    <input type="text" name="q1" value="" required="true">
                  </div>
              </div>
            </div>
              <script type="text/javascript">
 
</script>
            <div class="tm-timeline mb-4 tm-second-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-2"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-2">
                  <h5 class="mt-0 tm-text-green">E-Posta:</h5>
                  <input type="email" name="q2" value=""  placeholder="Mail Adresi Giriniz" required="true">
                </div>
              </div>
            </div>
              
          <div class="tm-timeline mb-4 tm-first-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-1"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-1">
                  <h5 class="mt-0 tm-text-green"> Yılda kaç defa hastaneyi ziyaret ediyorsunuz ?</h5>
                    <input type="number" name="q3" value=""  required="true"> 
                  </div>
              </div>
            </div>
              
            <div class="tm-timeline mb-4 tm-second-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-2"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-2">
                  <h5 class="mt-0 tm-text-green">Randevunuzu ne üzerinden alıyorsunuz?</h5>
                  <input type="radio" name="q4" value="1" required="true">İnternet (MHRS)<br>
                  <input type="radio" name="q4" value="0" required="true">Telefon (182)
                </div>
              </div>
            </div>
              
            <div class="tm-timeline mb-4 tm-first-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-1"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-1">
                  <h5 class="mt-0 tm-text-green">Telefonda randevu alırken şikayetinizi net bir şekilde anlatıyor musunuz ?</h5>
                    <input type="radio" name="q5" value="0" required="true">Evet<br>
                  <input type="radio" name="q5" value="1" required="true">Hayır
                  </div>
              </div>
            </div>
              
            <div class="tm-timeline mb-4 tm-second-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-2"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-2">
                  <h5 class="mt-0 tm-text-green">Hastaneye kiminle gidiyorsunuz ?</h5>
                
                    <input type="radio" name="q6" value="2" required="true">Tek<br>
                    <input type="radio" name="q6" value="2" required="true">Aile<br>
                    <input type="radio" name="q6" value="1" required="true">Akraba<br>
                    <input type="radio" name="q6" value="0" required="true">Arkadaş
                </div>
              </div>
            </div>
                
            <div class="tm-timeline mb-4 tm-first-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-1"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-1">
                  <h5 class="mt-0 tm-text-green"> Şikayetinizi anlatırken doktor hariç odada biri oluyor mu?</h5>
                    <input type="radio" name="q7" value="0" required="true">Evet<br>
                    <input type="radio" name="q7" value="1" required="true">Hayır 
                  </div>
              </div>
            </div>
              
            <div class="tm-timeline mb-4 tm-second-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-2"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-2">
                  <h5 class="mt-0 tm-text-green">Hastanede ki kayıtlarınızı nasıl tutulduğunu biliyor musunuz?</h5>
                  <input type="radio" name="q8" value="1" required="true">Evet<br>
                    <input type="radio" name="q8" value="0" required="true">Hayır
                </div>
              </div>
            </div>
                
            <div class="tm-timeline mb-4 tm-first-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-1"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-1">
                  <h5 class="mt-0 tm-text-green">Eğer Biliyorsanız kayıtlara hastane elemanlarından kimin erişebildiğini biliyor musunuz?</h5>
                    <input type="radio" name="q9" value="2" required="true">Evet<br>
                    <input type="radio" name="q9" value="0" required="true">Hayır<br>
                    <input type="radio" name="q9" value="1" required="true"> Bilmiyorum
                  </div>
              </div>
            </div>
              
            <div class="tm-timeline mb-4 tm-second-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-2"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-2">
                  <h5 class="mt-0 tm-text-green">Kayıtlarınızın tamamına erişebiliyor musunuz?</h5>
                  <input type="radio" name="q10" value="1" required="true">Evet<br>
                  <input type="radio" name="q10" value="0" required="true">Hayır
                </div>
              </div>
            </div>
                
            <div class="tm-timeline mb-4 tm-first-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-1"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-1">
                  <h5 class="mt-0 tm-text-green"> Hastanede ki kayıtlarınıza erişimini kime yetki sağlamak istersiniz ?</h5>
                    <input type="radio" name="q11" value="2" required="true">Hiç Kimse<br>
                    <input type="radio" name="q11" value="2" required="true">Aile<br>
                    <input type="radio" name="q11" value="1" required="true">Akraba<br>
                    <input type="radio" name="q11" value="0" required="true">Arkadaş
                  </div>
              </div>
            </div>
              
            <div class="tm-timeline mb-4 tm-second-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-2"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-2">
                  <h5 class="mt-0 tm-text-green">Hastaneden istediğinizde bilgilerinizi çıktısını alabiliyor musunuz ?</h5>
                  <input type="radio" name="q12" value="1" required="true"> Evet<br>
                    <input type="radio" name="q12" value="0" required="true"> Hayır
                </div>
              </div>
            </div>
                
            <div class="tm-timeline mb-4 tm-first-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-1"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-1">
                  <h5 class="mt-0 tm-text-green"> Bilgilerinizin erişimine yetkisi olmayan kişilerin verilerinize ait bir "Güvenlik parolanız" var mı?</h5>
                    <input type="radio" name="q13" value="2" required="true"> Evet<br>
                    <input type="radio" name="q13" value="0" required="true"> Hayır<br>
                    <input type="radio" name="q13" value="1" required="true"> Hiç Duymadım
                  </div>
              </div>
            </div>
              
            <div class="tm-timeline mb-4 tm-second-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-2"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-2">
                  <h5 class="mt-0 tm-text-green">Size ait bir "Hasta İmzası" var mı?</h5>
                  <input type="radio" name="q14" value="2" required="true"> Evet<br>
                    <input type="radio" name="q14" value="0" required="true"> Hayır<br>
                    <input type="radio" name="q14" value="1" required="true"> Hiç Duymadım
                </div>
              </div>
            </div>
                
            <div class="tm-timeline mb-4 tm-first-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-1"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-1">
                  <h5 class="mt-0 tm-text-green"> Sizinle aynı isme sahip kişilerle bir karışıklık yaşadınız mı? Yaşadıysanız Kaç kere olmuş?</h5>
                    <input type="radio" name="q15" value="1" required="true"> Evet - Bir kere<br>
                    <input type="radio" name="q15" value="1" required="true"> Evet - İki kere<br>
                    <input type="radio" name="q15" value="0" required="true"> Evet - Çok<br>
                    <input type="radio" name="q15" value="2" required="true"> Hayır
                  </div>
              </div>
            </div>
              
            <div class="tm-timeline mb-4 tm-second-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-2"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-2">
                  <h5 class="mt-0 tm-text-green">Bilgilerinize sizin yetki durumu verdiğiniz kişi haricinde fazla bilgi verilme durumu yaşandı mı? Yaşadıysanız Kaç kere olmuş?</h5>
                  <input type="radio" name="q16" value="1" required="true"> Evet - Bir kere<br>
                    <input type="radio" name="q16" value="1" required="true"> Evet - İki kere<br>
                    <input type="radio" name="q16" value="0" required="true"> Evet - Çok<br>
                    <input type="radio" name="q16" value="2" required="true"> Hayır
                </div>
              </div>
            </div>
                
            <div class="tm-timeline mb-4 tm-first-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-1"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-1">
                  <h5 class="mt-0 tm-text-green"> Hastanede kayıtlarınızın silinme mekanizması hakkında bilginiz var mı?</h5>
                    <input type="radio" name="q17" value="1" required="true"> Evet<br>
                    <input type="radio" name="q17" value="0" required="true"> Hayır
                  </div>
              </div>
            </div>
              
            <div class="tm-timeline mb-4 tm-second-timeline">
              <div class="media tm-media">
                <div class="tm-timeline-img-wrap mr-4">
                    <div class="tm-media-img tm-media-img-ml-2"></div>
                </div>
                <div class="media-body tm-media-body tm-media-body-ml-2">
                  <h5 class="mt-0 tm-text-green">Biliyorsanız sizce bu mekanizma bilgilerinize tamamen güvenli mi?</h5>
                  <input type="radio" name="q18" value="2" required="true"> Evet<br>
                  <input type="radio" name="q18" value="1" required="true"> Orta<br>
                  <input type="radio" name="q18" value="0" required="true"> Hayır
                </div>
              </div>
            </div>
                 
            </div>
                   
              <div class="form-group" >
                  <button id="asd" name="submit" type="submit" class="btn btn-primary tm-btn-send">YOLLA</button>     
              </div>
                    
          </form>
            <br><br><br><br><br>
          <footer class="row tm-text-white">
            
            <p class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-0 text-center tm-footer-text">
             
              Copyrights © SCÜ HIPAA Team
            </p>
          </footer>
        </div>
      </div>   
      </section>

  <!-- load JS -->

 <script src="js/jquery-3.2.1.slim.min.js"></script> 
  <script>

    /* DOM is ready
    ------------------------------------------------*/
    $(function () {

      if (renderPage) {
        $('body').addClass('loaded');
      }

      $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
    });
   
  </script>

      </div>
    </div>
</body>
</html>