<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style-timeline.css">
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

</head>
<body>
<?php include("nav.php")?>
<br><br><br><br>
    <section class="timeline">
        <div class="timeline-row">
            <div class="timeline-column">
                <h2 class="title">Education <span class = "animate" style="--i:1;"></span></h2>

                <div class="timeline-box">
                    <div class="timeline-content">
                        <div class="content">
                            <div class="year"><box-icon type='solid' name='calendar'></box-icon> 2012-2023</div>
                            <h3>Collage</h3>
                            <p>FEU Institute of Technology, BS in Information Technology with Specialization in Digital Arts (BS IT-DA)<br>
                                P. Paredes St., Sampaloc, Manila</p>
                        </div>
                    </div>

                    <div class="timeline-content">
                        <div class="content">
                            <div class="year"><box-icon type='solid' name='calendar'></box-icon> 2008 - 2012</div>
                            <h3>High School </h3>
                            <p>Systems Plus Computer College
                                141-143, 10th Avenue, Caloocan City</p>
                        </div>
                    </div>

                  

                    <span class = "animate" style="--i:2;"></span>
                </div>
            </div>

            <div class="timeline-column">
                <h2 class="title">Certificates <span class = "animate" style="--i:3;"></span></h2>

                <div class="timeline-box">
                    <div class="timeline-content">
                        <div class="content">
                            <div class="year"><box-icon type='solid' name='calendar'></box-icon> 2021</div>
                            <h3>Cisco Networking 1®
                                CCNAv7: Introduction to
                                Networking</h3>
                            <p> <button type="button" class="btn btn-link btn-sm text-white" data-bs-toggle="modal" data-bs-target="#CCN1">
                                view
                            </button></p>
                        </div>
                    </div>

                    <div class="timeline-content">
                        <div class="content">
                            <div class="year"><box-icon type='solid' name='calendar'></box-icon> 2022</div>
                            <h3>Cisco Networking 2®
                                CCNAv7: Switching, Routing,
                                and Wireless Essentials </h3>
                                <p> <button type="button" class="btn btn-link btn-sm text-white" data-bs-toggle="modal" data-bs-target="#CCN2">
                                view
                            </button></p>
                        </div>
                    </div>

                    <div class="timeline-content">
                        <div class="content">
                            <div class="year"><box-icon type='solid' name='calendar'></box-icon> 2023</div>
                            <h3>Information Technology
                                Specialist
                                Certification for HTML and
                                CSS</h3>
                                <p> <button type="button" class="btn btn-link btn-sm text-white" data-bs-toggle="modal" data-bs-target="#html&css">
                                view
                            </button></p>
                        </div>
                    </div>

                  

                    <span class = "animate" style="--i:4;"></span>
                </div>
            </div>



            <div class="timeline-column">
                <h2 class="title">Work Experience <span class = "animate" style="--i:5;"></span></h2>

                <div class="timeline-box">
                    <div class="timeline-content">
                        <div class="content">
                            <div class="year"><box-icon type='solid' name='calendar'></box-icon> December 2022 – July 2023</div>
                            <h3>FEU Institute of Technology – EdiTH (Internship) </h3>
                           <p>• Work with Art Director and TechXpert to ensure scheduled on-site
                               consultations. 
                               <br>
                               • Transcribe and transform course scripts for TechXpert review and
production. 
                               <br>
                               • Work closely with the Script Lead in the endorsement and quality
                                        assessment course script.
                               <br>
                            </p>
                        </div>
                    </div>

                  
                     <span class = "animate" style="--i:6;"></span>
                </div>

                
                
            </div>
        </div>
    </section>
    
    
</body>
</html>

<!-- The CCN1 Modal -->
<div class="modal" id="CCN1">
<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <img src="certificates/LuvLetrodo-SY2021-221TIT001-certificate_page-0001.jpg" alt="CCN2" width = "100%" height = "100%">
      </div>

    </div>
  </div>
</div>

<!-- The CCN2 Modal -->
<div class="modal" id="CCN2">
<div class="modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <img src="certificates/LuvLetrodo-SY2021-222TIT001-certificate (1)_page-0001.jpg" alt="CCN2" width = "100%" height = "100%">
      </div>

    </div>
  </div>
</div>

<!-- The html&css Modal -->
<div class="modal" id="html&css">
<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <img src="certificates/HTML and CSS_page-0001.jpg" alt="CCN2" width = "100%" height = "100%">
      </div>

    </div>
  </div>
</div>