<?php
    $site_title = 'Aerial Robotics';
    $site_index = '/partieee';
    include '../header.php';
?>

<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <!-- Sidebar Column -->
        <?php include 'navigation.php' ?>
        <script>
            let currentLink = "part-about-sidelink";
            document.getElementsByClassName(currentLink)[0].classList.add("active");
        </script>

        <!-- Content Column -->
        <div class="col-md-7 text-dark col-md-offset-1 text-center">
            <h2>About PARTIEEE</h2>
            <p>The Purdue Aerial Robotics Team IEEE (PARTIEEE) was founded back in 1996 as a committee within the Purdue IEEE
                Student Organization. The Purdue Aerial Robotics Team mission is to create an Unmanned Aerial System (UAS) to 
                compete in the Association for Unmanned Vehicle Systems International Student Unmanned Air Systems (AUVSI SUAS) Competition.
			<hr />
			Purdue Aerial Robotics Team consists of both engineering and non-engineering focuses. The engineering goals are
                to create mathematical and physical models, construct prototypes, and develop a final, mission-ready
                system. The non-engineering goals are to develop relationships with companies, encourage a collaborative
                work environment, communicate effectively with team members, and provide learning opportunities for
                students of any discipline and experience level. Achieving these goals will help us develop a UAS that
                meets the rigorous standards demanded by the competition, in order to succeed as a team.
			<hr />
			Purdue Aerial Robotics Team prides itself on its student leadership, perseverance, and desire to excel in
                all frontiers. Furthermore, team members are constantly striving to learn the technical skills necessary
                to bring the design to fruition, including 3D-modeling in SolidWorks and CATIA V5, designing the PCB in
                Eagle Pro, and programming in C, C++, Python, MATLAB, and JavaScript.
            </p>
            
            <hr />
            <div class="row text-center">
            <h2 id="officers">Leadership</h2>
                <!--Nathan Broman-->
                <!--TODO wait for website update
                <img src="../images/officers/2020_Nathan_Broman.jpg" alt= "2020_Nathan_Broman" class="img-circle" width=250px height=250px />-->
                <h4>Nathan Broman</h4>
                <em>Aerospace Engineering</em>
                <p>Aerial Robotics Captain</p>
                <div class="row text-center">
                    <!--Dakota Do-->
                    <div class= "col-md-4">
                        <h4>Dakota Do</h4>
                        <em>Aerospace Engineering</em>
                        <p>Aeromechanical Lead</p>
                    </div>
                    <!--Alex Rodgers-->
                    <div class= "col-md-4">
                        <h4>Alex Rogers</h4>
                        <em>Computer Engineering</em>
                        <p>Software Lead</p>
                    </div>
                    <!--Hadi Ahmed-->
                    <div class= "col-md-4">
                        <h4>Hadi Ahmed</h4>
                        <em>Computer Engineering</em>
                        <p>Electrical Lead</p>
                    </div>
                    <!--Alex Zhang-->
                    <div class= "col-md-4">
                        <h4>Alex Zhang</h4>
                        <em>Finance, Supply Chain Business Analytics</em>
                        <p>Sponsorship Coordinator</p>
                    </div>
                </div>
            </div>
            
            <hr />
            <div class="row text-center">
                <h2 id="events">Sub-teams</h2>

                <h3>Aeromechanical</h3>
                <p>
                The AeroMechanical sub-team of Purdue Aerial Robotics Team designs, builds, and tests a safe, 
                    mission effective platform for the AUVSI SUAS competition. The sub-team's goal is to provide team members 
                    a worthwhile, modern experience on aircraft design. The team has a strong emphasis on system design and 
                    manufacturing practicality. A rigorous engineering approach is applied from structures and propulsion, with 
                    training to provide any necessary skills to students of all skill and experience levels. FEA and CFD techniques 
                    are utilized along with traditional analysis and testing. Our designs are built around expertise in composites 
                    manufacturing, supported by precise 3D printed molds, to provide an efficient airframe while mirroring the 
                    ongoing changes in the industry.
                </p>

                <h3>Electrical</h3>
                <p>
                The electrical sub-team of Purdue Aerial Robotics Team (IEEE) is responsible for designing and 
                    implementing the plane's embedded hardware and software systems. The goals of this sub-team are 
                    to develop a safe, efficient system capable of navigating and collecting data about its surrounding 
                    environment with minimal human intervention. Much of the work done by the electrical sub-team involves 
                    both hardware and software and falls into the areas of communications, signal processing, and 
                    circuit design. Past projects have included the development of a custom flight controller, radio 
                    communications between the aircraft and its ground station, filter implementations for sensor systems, 
                    creation of autonomous flight control algorithms, and simulation design in MATLAB and Simulink 
                    to rapidly validate and improve existing navigation algorithms. To accomplish these tasks, the 
                    plane is outfitted with various sensors including an IMU, lidar, airspeed sensor, and GPS, among 
                    others, and software written in C, MATLAB, and Python. Lastly, the plane is temporarily 
                    controlled with a Pixhawk flight controller to ensure a working system at competition. 
                    The team's current goal is to prepare for competition by ensuring that the plane's flight 
                    data is properly sent to the server used to judge the aircraft's abilities. This involves 
                    writing communication scripts in Python to ensure all data is sent and received correctly. 
                    Over the next year, the electrical sub-team hopes to redesign the current flight control system to 
                    create a new system that is more capable and easier to use for future competitions.
                </p>

                <h3>Software</h3>
                <p>
                The software sub-team of Purdue Aerial Robotics Team (IEEE) is responsible for designing and implementing 
                    the UAV's computer vision system. The goal of this sub-team is to develop a robust and accurate system 
                    which can identify multiple characteristics of various objects on the ground with minimal human 
                    intervention. The software sub-team works with image processing libraries, such as openCV, to filter 
                    incoming pictures and extract necessary data. More recently, the team has also incorporated machine 
                    learning libraries, such as Keras, to increase detection accuracy. Additionally, past projects have 
                    included reading image data from our camera and implementing a communication system between the aircraft 
                    computer vision boards and the ground station. The team also maintains a custom ground control station. 
                    Developed from scratch, this system displays telemetry from our aircraft and sends necessary data to 
                    the judging station for competition. Our team is committed to pushing the limits of current technology 
                    and computer science. So, the team's current, year-long goal is to create a computer vision system which 
                    entirely runs on the aircraft. This includes all image processing, object detection, and object 
                    classification, which improves our system by allowing the aircraft to perform object detection tasks 
                    without a connection to the ground station.
                </p>
            </div>

        </div>
    </div>
</div>

<?php include '../footer.php'; ?>