<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Neha Patel Portfolio</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
html { scroll-behavior: smooth; }

body {
    margin: 0;
    font-family: 'Chivo', sans-serif;
    background: #fff;
    color: #4b2e1e;
    overflow-x: hidden;
}

/* NAVBAR */
.navbar {
    position: fixed;
    top: 0;
    width: 100%;
    height: 75px;
    background: rgba(176,137,104,0.95);
    display: flex;
    align-items: center;
    padding: 0 60px;
    z-index: 100;
}

.logo {
    font-size: 26px;
    font-weight: bold;
    color: #fff;
}

.menu {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}

.menu a {
    margin: 0 14px;
    text-decoration: none;
    color: #fff;
    font-size: 18px;
}

.menu a:hover {
    text-decoration: underline;
}

/* HERO */
.hero-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 160px 140px 120px;
}

/* DIAMOND IMAGE */
.diamond-wrapper {
    position: relative;
    width: 320px;
    height: 320px;
    transform: rotate(45deg);
    border: 5px solid #b08968;
    overflow: hidden;
}

.diamond-wrapper img {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 160%;
    transform: translate(-50%, -50%) rotate(-45deg);
    object-fit: cover;
}

/* SEMI SHAPE */
.semi-shape {
    position: absolute;
    bottom: -30px;
    left: -30px;
    width: 120px;
    height: 120px;
    border: 3px solid #b08968;
    border-radius: 0 120px 0 0;
    opacity: 0.8;
}

/* HERO TEXT */
.hero-text {
    max-width: 520px;
}

.hero-text h1 {
    font-size: 70px;
    font-weight: 900;
    letter-spacing: 1px;
    line-height: 1.1;
}

.role {
    display: inline-block;
    margin-top: 14px;
    padding: 10px 32px;
    background: #6b4a2f;
    color: #fff;
    border-radius: 30px;
    font-size: 17px;
    letter-spacing: 1px;
}

.contact {
    margin-top: 18px;
    font-size: 15px;
    color: #7a5438;
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.contact span {
    display: flex;
    align-items: center;
    gap: 6px;
}

.desc {
    margin-top: 30px;
    font-size: 18px;
    line-height: 1.9;
    color: #5a3a25;
    position: relative;
    padding-left: 18px;
}

.desc::before {
    content: "";
    position: absolute;
    left: 0;
    top: 6px;
    width: 4px;
    height: 80%;
    background: #b08968;
    border-radius: 2px;
}

/* BACKGROUND SHAPES */
.corner {
    position: fixed;
    width: 130px;
    height: 130px;
    border: 3px solid rgba(176,137,104,0.6);
    transform: rotate(45deg);
    z-index: -1;
}

.left-top { top: -60px; left: -60px; }
.right-top { top: -60px; right: -60px; }
.right-bottom { bottom: -60px; right: -60px; }
.left-bottom { bottom: -60px; left: -60px; }

.strip-left,
.strip-right {
    position: fixed;
    width: 420px;
    height: 120px;
    background: rgba(176,137,104,0.25);
    z-index: -2;
}

.strip-left {
    top: 28%;
    left: -220px;
    transform: rotate(45deg);
}

.strip-right {
    bottom: 28%;
    right: -220px;
    transform: rotate(-45deg);
}
/* FADE EFFECT */
.fade {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.6s ease, visibility 0.6s ease;
}

.show {
    opacity: 1;
    visibility: visible;
}

/* ABOUT SECTION */
#about {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 88vh;
    padding-top: 75px;
    font-size: 22px;
}
.about-box {
    border: 2px solid #b08968;
    padding: 40px;
    max-width: 800px;
    border-radius: 6px;
    background: rgba(255,255,255,0.9);
}

.about-box h3 {
    margin-top: 0;
    font-size: 28px;
    color: #4b2e1e;
}

.about-box p {
    font-size: 18px;
    line-height: 1.8;
    color: #5a3a25;
}
.about-footer {
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
}

.experience-link {
    font-size: 16px;
    cursor: pointer;
    color: #6b4a2f;
    font-weight: 600;
}

.experience-link:hover {
    text-decoration: underline;
}

.back-arrow {
    margin-top: 20px;
    font-size: 18px;
    cursor: pointer;
    color: #6b4a2f;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.back-arrow:hover {
    text-decoration: underline;
}
/* SKILLS SECTION */
#skills {
    height: 100vh;
   
    display: flex;
    align-items: center;
    justify-content: center;
}

.skills-wrapper {
    display: flex;
    align-items: center;
    gap: 80px;
}

.skill-box {
    width: 300px;
    padding: 30px;
    border: 2px solid #b08968;
    border-radius: 10px;
    background: rgba(255,255,255,0.95);
    text-align: center;
    position: relative;
}

.skill-box h3 {
    margin-top: 20px;
    color: #4b2e1e;
}

.skill-box ul {
    list-style: none;
    padding: 0;
    margin-top: 15px;
}

.skill-box li {
    padding: 6px 0;
    color: #5a3a25;
    font-size: 16px;
}

/* GEARS */
.gear {
    position: absolute;
    top: -35px;
    right: -35px;
    background: #b08968;
    color: #fff;
    border-radius: 50%;
    animation: rotate 8s linear infinite;
}

.gear.big {
    width: 70px;
    height: 70px;
    font-size: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.gear.small {
    width: 55px;
    height: 55px;
    font-size: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* CENTER IDEA */
.idea {
    text-align: center;
    color: #6b4a2f;
}

.idea i {
    font-size: 60px;
    color: #b08968;
}

.idea p {
    margin-top: 10px;
    font-size: 18px;
    font-weight: 600;
}

/* ROTATION */
@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}
/* CONTACT SECTION */
#contact {
    height: 80vh;
    padding-top: 120px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-box {
    width: 420px;
    padding: 40px;
    border: 2px solid #b08968;
    border-radius: 10px;
    background: rgba(255,255,255,0.95);
}

.contact-box h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #4b2e1e;
}

.contact-box input,
.contact-box textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 14px;
    border: 1px solid #b08968;
    border-radius: 6px;
    font-size: 15px;
}

.contact-box button {
    width: 100%;
    padding: 12px;
    background: #6b4a2f;
    color: #fff;
    border: none;
    border-radius: 30px;
    font-size: 16px;
    cursor: pointer;
}

.contact-box button:hover {
    background: #4b2e1e;
}

</style>
</head>

<body>

<!-- BACKGROUND SHAPES -->
<div class="corner left-top"></div>
<div class="corner right-top"></div>
<div class="corner right-bottom"></div>
<div class="corner left-bottom"></div>
<div class="strip-left"></div>
<div class="strip-right"></div>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="logo">NP</div>
    <div class="menu">
<a href="#" onclick="showSection('home')">Home</a>
<a href="#" onclick="showSection('about')">About</a>
<a href="#" onclick="showSection('skills')">Skills</a>
<a href="#">Projects</a>
<a href="#" onclick="showSection('contact')">Contact</a>

    </div>
</nav>

<!-- HERO SECTION -->
<section class="hero-container show" id="home" class="section-page show">

    <div class="diamond-wrapper">
        <img src="images/neha.jpeg" alt="Neha Patel">
        <div class="semi-shape"></div>
    </div>

    <div class="hero-text">
        <h1>Neha Patel</h1>

        <div class="role">Technical Support</div>

        <div class="contact">
            <span><i class="fa-solid fa-phone"></i> +91 8655854216</span>
            <span><i class="fa-solid fa-envelope"></i> support@pksinfo.com</span>
            <span><i class="fa-solid fa-envelope"></i> np1553156@gmail.com</span>
        </div>

        <p class="desc">
            I constantly encourage myself to give my best in every task assigned to me.
            I have a strong interest in learning new skills and believe that continuous
            learning and staying curious are key to growth and long-term success.
        </p>
    </div>

</section>

</section>
<!-- ABOUT SECTION -->
<section id="about" class="section-page fade" style="display:none;">
    
    <!-- ABOUT CONTENT -->
    <div class="about-box" id="aboutContent">
        <h3>About Me</h3>
        <p> My name is Neha Patel, born and raised in Mumbai, with Gujarati as my mother tongue. 
            I consider myself a focused and intelligent individual with a strong desire to learn and grow continuously.
        <br><br> I completed my Secondary School (10th grade) from Father Agnel’s English School in 2020, securing 70%.
         I then pursued my Higher Secondary Education (12th grade) in the Science stream and completed it in 2022 with 
         60%. <br><br> I successfully completed my Bachelor of Computer Science (BCS IT) in 2025, achieving an overall
          CGPA of 8.95. With a solid academic background and a strong interest in technology, I aim to build a professional 
        career where I can apply my skills, continue learning, and contribute effectively to organizational success. </p>

        <div class="about-footer">
            <span class="experience-link" onclick="showExperience()">Experience →</span>
        </div>
    </div>

    <!-- EXPERIENCE CONTENT -->
    <div class="about-box fade" id="experienceContent" style="display:none;">
        <h3>Experience</h3>

       <p>
I began my entrepreneurial journey in 2020 by establishing my own business focused on
handcrafted chandeliers, decorative wall hangings, and professional Mehendi design
services.
<br><br>
During my academic tenure, I gained practical exposure by working as a Biller in a mall
for a period of two months while pursuing my SYIT. I further strengthened my technical
skills by successfully completing a six-month internship as a Full Stack Developer,
where I acquired hands-on experience in building and managing web applications.
<br><br>
Currently, I am employed as an IT Technical Support professional at PKS Infocom Pvt. Ltd.
In addition to this role, I also work as a Tutor with Master Class, providing guidance
and technical support to learners.
</p> 

        <div class="back-arrow" onclick="backToAbout()">← Back to About</div>
    </div>

</section>
<!-- SKILLS SECTION -->
<section id="skills" class="section-page fade" style="display:none;">

    <div class="skills-wrapper">

        <!-- LEFT SKILLS -->
        <div class="skill-box left">
            <div class="gear big">
                <i class="fa-solid fa-gear"></i>
            </div>
            <h3>Technical Skills</h3>
            <ul>
                <li>Technical Support</li>
                <li>HTML, CSS, JavaScript</li>
                <li>Laravel (Basic)</li>
                <li>MySQL Database</li>
                <li>SQL Queries</li>
                <li>Salesforce (Learning)</li>
            </ul>
        </div>

        <!-- CENTER IDEA -->
        <div class="idea">
            <i class="fa-solid fa-lightbulb"></i>
            <p>Skills grow<br>when ideas connect</p>
        </div>

        <!-- RIGHT SKILLS -->
        <div class="skill-box right">
            <div class="gear small">
                <i class="fa-solid fa-gear"></i>
            </div>
            <h3>Professional Skills</h3>
            <ul>
                <li>Customer Handling</li>
                <li>Problem Solving</li>
                <li>Communication</li>
                <li>Quick Learner</li>
                <li>Time Management</li>
                <li>Team Work</li>
            </ul>
        </div>

    </div>

</section>
<section id="contact" class="section-page fade" style="display:none;">

    <div class="contact-box">
        <h2>Contact Us</h2>
@if(session('success'))
    <p style="color:green; text-align:center;">
        {{ session('success') }}
    </p>
@endif
       <form action="{{ route('contact.send') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <textarea name="message" placeholder="Description / Message" required></textarea>

    <button type="submit">Send Message</button>
</form>
    </div>

</section>
<script>
function showSection(sectionId) {

    const sections = document.querySelectorAll(
        '#home, #about, #skills, #contact'
    );

    sections.forEach(section => {
        section.classList.remove("show");
        section.classList.add("fade");

        setTimeout(() => {
            section.style.display = "none";
        }, 400);
    });

    const activeSection = document.getElementById(sectionId);

    setTimeout(() => {
        activeSection.style.display = "flex";
        activeSection.classList.remove("fade");
        activeSection.classList.add("show");
    }, 450);
}

/* 👉 ABOUT → EXPERIENCE */
function showExperience() {
    const about = document.getElementById("aboutContent");
    const exp = document.getElementById("experienceContent");

    about.classList.add("fade");

    setTimeout(() => {
        about.style.display = "none";
        exp.style.display = "block";
        exp.classList.remove("fade");
        exp.classList.add("show");
    }, 400);
}

/* 👉 EXPERIENCE → ABOUT */
function backToAbout() {
    const about = document.getElementById("aboutContent");
    const exp = document.getElementById("experienceContent");

    exp.classList.add("fade");

    setTimeout(() => {
        exp.style.display = "none";
        about.style.display = "block";
        about.classList.remove("fade");
        about.classList.add("show");
    }, 400);
}
</script>



</body>
</html>
