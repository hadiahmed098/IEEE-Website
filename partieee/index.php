<?php
    $site_title = 'Aerial Robotics';
    $site_index = '/partieee';
    include '../header.php';
?>

<!-- TODO get better color scheme <link href="/assets/bootstrap.partieee.css" rel="stylesheet"> -->

<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <!-- Sidebar Column -->
        <?php include 'navigation.php'; ?>
        <script>
            let currentLink = "part-home-sidelink";
            document.getElementsByClassName(currentLink)[0].classList.add("active");
        </script>

        <!-- Content Column -->
        <div class="col-md-7 text-dark col-md-offset-1 text-center">
            <img src="images/part_logo_rect.png" />
            <h2 id="mission">Mission</h2>
            <hr />
            <p>
			The Purdue Aerial Robotics Team mission is to create an Unmanned Aerial System (UAS) to compete in the
            Association for Unmanned Vehicle Systems International Student Unmanned Air Systems (AUVSI SUAS)
            Competition. This competition will take place in Webster Field, Maryland in 2021. The team consists
            of Aeromechanical, Electrical, and Software sub-teams.
            </p>

            <h2 class="text-center">2019-21 Competition UAV</h2>
            <img src="images/uav_2020.jpg" alt="2020-21 Competition UAV" style="width:100%" class="img-rounded">

            <br />
            <div class="well card-1 text-dark">
            <div class="row text-center">
            <h2 id="officers">Leadership</h2>
            <hr />
                <!--Nathan Broman-->
                <!--TODO wait for website update
                <img src="../images/officers/2020_Nathan_Broman.jpg" alt= "2020_Nathan_Broman" class="img-circle" width=250px height=250px />-->
                <h4>Nathan Broman</h4>
                <em>Aerospace Engineering</em>
                <p>Aerial Robotics Captain</p>
                <p><a href="mailto:nbroman@purdue.edu">nbroman@purdue.edu</a><br /></p>
            <hr />
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
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
