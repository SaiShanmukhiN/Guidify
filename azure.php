<?php
include('server.php');

// Assuming you have a logged-in user, fetch their username from the database
if (isset($_SESSION['username'])) {
    $loggedInUsername = $_SESSION['username'];
    $firstLetter = strtoupper(substr($loggedInUsername, 0, 1));
} else {
    // If the user is not logged in, set a default letter or handle it as needed
    $firstLetter = 'G'; // Change this to your desired default letter
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azure</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            color: #007BFF;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            transition: transform 0.3s ease-in-out;
        }

        li:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        strong {
            color: #007BFF;
            font-size: 1.2em;
        }

        .rating {
            color: #f39c12; /* Orange color for stars */
            font-size: 0.9em; /* Adjust the font size to make stars smaller */
        }

        .duration,
        .level,
        .description,
        .website {
            color: #666;
            margin-top: 8px;
        }

        .level {
            color: #28a745; /* Green color for beginner */
            font-weight: bold;
        }

        .website a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .website a:hover {
            text-decoration: underline;
        }
        .profile-circle {
      width: 40px;
      height: 40px;
      background-color: #3498db; /* Choose your background color */
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff; /* Choose your text color */
      font-size: 16px; /* Choose your font size */
      font-weight: bold;
      margin-left: 10px;
      cursor: pointer;
      position: relative;
    }

    .profile-dropdown {
      position: absolute;
      top: 60px;
      right: 10px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      display: none;
    }

    .profile-circle:hover .profile-dropdown,
    .profile-dropdown.active {
      display: block;
    }

    .profile-dropdown a {
      display: block;
      padding: 8px;
      text-decoration: none;
      color: #333;
      transition: background-color 0.3s;
    }

    .profile-dropdown a:hover {
      background-color: #f2f2f2;
    }
.cour{
            display: flex;
        }
        .c1{
            padding: 20px;
        }


    </style>
</head>
<body>
<header>
        <div class="container">
            <div style="display: flex; width: 100%; justify-content: space-between; align-items: center;">
              <h1 style="font-size:35px">Guidify</h1>
              <?php if (isset($_SESSION['username'])): ?>
                 <div style="display: flex; align-items: center;">
          <div class="profile-circle" onclick="toggleProfileDropdown()">
            <?php echo $firstLetter; ?>
            <div class="profile-dropdown" id="profileDropdown">
              <a href="profile.php">Profile</a>
              <a href="home1.php">Home</a>
              <a href="aboutus.php">About Us</a>
              <a href="contact.php">Contact</a>
              <a href="index.php">Logout</a>
            </div>
          </div>
        </div>
              <?php else: ?>
                
              <?php endif; ?>
            </div>
             </header>



    <h1>Azure</h1>

    <ul>
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>udemy</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>17h 44m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $5.42
            <br>
            <span class="description">Azure is one of the best cloud services that offer this. Aure is one of the biggest cloud services. If you wish to be an IT professional (app development, system administration, DevOps and others), then Azure is crucial. Azure offers a great platform which you can integrate with your projects.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/70533-azure/?gad_source=1&gclid=CjwKCAiAuNGuBhAkEiwAGId4agMVOma2umU1V2D6MHy6pMAT-epPdptCDygkKt5Z3uFSyNtOEIlpExoCxgkQAvD_BwE&matchtype=b&utm_campaign=MicrosoftAzure_v.PROF_la.EN_cc.INDIA_ti.6716&utm_content=deal4584&utm_medium=udemyads&utm_source=adwords&utm_term=_._ag_85901414562_._ad_670113568314_._kw_azure+online+training_._de_c_._dm__._pl__._ti_aud-1738475842996%3Akwd-295206835616_._li_9147224_._pd__._">Learn more</a></span>
        </li>

       
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./edureka.jpg" width = "140px" heigth = "140px"/></div>
		<div>

<strong>edureka</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 4h 46m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: $83.22
            <br>
            <span class="description">It is a cloud computing service. Azure provides different services such as:
Software as a service (Saas)
Platform as a service (PaaS)
Infrastructure as a service (IaaS).</span>
            <br>
            <span class="website"><a href="https://www.edureka.co/microsoft-certified-azure-solution-architect-certification-training?utm_source=Google-Search&utm_medium=cpc&utm_campaign=ET-IND-054-Search-Microsoft-Azure&utm_term=Training&gad_source=1&gclid=CjwKCAiAuNGuBhAkEiwAGId4aqVtDihdkQ5HPn5wmc1uFaVlIigA6qtUEu5aUOG450UcAOWt8E0bzxoCdK0QAvD_BwE">Learn more</a></span>
        </li>

<li><div class = "cour">
		<div class="c1">
			<img src = "./classcentral.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Class Central</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>3-4hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $13.82
            <br>
            <span class="description">Azure is user-friendly as it seamlessly integrates common languages and tools that you already know.There is a high demand for cloud skills, and you don’t want to skip Azure.</span>
            <br>
            <span class="website"><a href="https://www.classcentral.com/course/artificial-intelligence-microsoft-azure-43806">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./cloudthat.png" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>cloudthat</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>14hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $5.40
            <br>
            <span class="description">
Azure is Microsoft’s public cloud computing platform, created in 2010. Cloud computing services offer storage, servers, networking, and analytics power to users via the internet, instead of traditional hardware.
</span>
            <br>
            <span class="website"><a href="https://www.cloudthat.com/training/microsoft-azure-certification?utm_source=Google-Ads&utm_medium=PPC-azure-generic&utm_campaign=RTL-GG-+Azure+Campaign+Aug-23&utm_term=azure%20certification&adgroup=151491926574&device=c&match_type=p&gad_source=1&gclid=CjwKCAiAuNGuBhAkEiwAGId4akfGSmQfayImFTCxMFbydr7ltJ0sjYvACtcG7eilcONE5XyND5xMqhoCwAQQAvD_BwE">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./intellipaat.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>intellipaat</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>40 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: $233.11
            <br>
            <span class="description">Our Azure Administrator Certification paves the way for learners to get accustomed to Azure infrastructure and deployment. This Azure Course is best suited for professionals who want to become Azure Administrators.</span>
            <br>
            <span class="website"><a href="https://intellipaat.com/microsoft-azure-training/?gad=1&utm_source=google&utm_medium=display&utm_campaign=p_performance-max_generic_in_secondary_new&gad_source=1&gclid=CjwKCAiAuNGuBhAkEiwAGId4atdo-UzfTCx_mxYQ-PcRQxkyNgG-mcCmRbSYOTG7_Qijcne_gZF2qRoCJq0QAvD_BwE">Learn more</a></span>
        </li>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>coursera</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>3mon at 10hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: $20
            <br>
            <span class="description">Microsoft Azure courses designed to fit your needs. Curated from top educational institutions and industry leaders, our selection of Microsoft Azure courses aims to provide quality training for everyone—from individual learners seeking personal growth to corporate teams looking to upskill. For those pursuing professional advancement, skill acquisition, or even a new career path, these Microsoft Azure courses can be a valuable resource.</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/professional-certificates/microsoft-azure-dp-203-data-engineering#courses">Learn more</a></span>
        </li>
</ul>
<script>
  function toggleProfileDropdown() {
    var dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('active');
  }
</script>


</body>
</html>




