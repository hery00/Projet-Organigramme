<body class="main">
    <div class="content">
<!-- 
    <div class="chef">
        <div class="avatar">
            <img src="" alt="">
        </div>
        <p>Nom du chef</p>
        <p>Post d'occupation</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat culpa pariatur minus delectus 
        itaque in enim molestias eos ipsum excepturi, illum numquam officiis rem voluptatem perspiciatis eveniet veniam, beatae vel!</p>
    </div> -->
   <?php  for($i=0;$i<count($result);$i++) { ?>
    <div class="cards">
        <div class="card">
            <div class="avatar2">
                <img src="" alt="">
            </div>
            <p>Nom et prenom:<?php echo $result[$i]['nom']+"  ",$result[$i]['prenom'];?></p>
            <p>Post d'occupation:</p>
            <p>Niveau :</p>
        </div>
    <?php } ?>
        <!-- <div class="card">
            <div class="avatar2">
                <img src="" alt="">
            </div>
            <p>Nom et prenom</p>
            <p>Post d'occupation</p>
            <p>Description du post</p>
        </div>
        <div class="card">
            <div class="avatar2">
                <img src="" alt="">
            </div>
            <p>Nom et prenom</p>
            <p>Post d'occupation</p>
            <p>Description du post</p>
        </div> -->
    </div>