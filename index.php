
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel Agent</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="css/main.css" rel="stylesheet">

</head>

<body class="stranica" 
style="margin-bottom:100px ;background-image: url(css/pozadina.jpeg); 
    background-repeat: no-repeat;
    background-size: 2000px 1300px;"
    >
   
    <nav class="navbar navbar-expand-lg navbar-light" id="navCont" style="height:90px; background-color: #F4F4E9; ">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <a class="navbar-brand " href="index.php"style="color:#4E7779 ; margin-top:20px ;font-size:29px">Travel Agent</a>
                <div class="navbar-nav p-lg-0 " style="margin-left: 28%; color:white ; ">
                    <li><a id="btn-Pocetna" href="index.php" type="button" class="btn btn-success btn-block" style=" margin-left:25px ; margin-right:50px; background-color: #CDA491;color:white; font-size:17px; font-weight:bold ">
                        Home</a></li>
                    <li><a id="btn-Dodaj" type="button" class="btn btn-success btn-block"  data-toggle="modal" data-target="#my" style="margin-left:50px ; margin-right:80px; background-color:#CDA491 ;color:white; font-size:17px; font-weight:bold">
                        Dodaj </a></li>
                    <li><a id="btn-Prikazi" href="pogledajDestinacije.php" type="button" class="btn btn-success btn-block"style=" margin-left:80px; margin-right:100px; background-color:#CDA491 ;color:white; font-size:17px; font-weight:bold">
                        Destinacije</a></li>
                    <li><a id="btn-Pocetna" href="odjava.php" type="button" class="btn btn-success btn-block" style=" color:white; margin-left:100px; background-color:#b7c098 ;color:white; font-size:17px; font-weight:bold ">
                    Odjava</a> </li>
                </div>
                
            </div>
    </nav>

        <div id="box" >
        <div class="container"style="background-color: none" >
            <div class="row">
                <div class="tekst" style="background-color: #B56A53; margin-top:70px ; text-align: center; margin-right:400px; padding:20px; border-radius: 20px;  ">
                    <h2 style="color:white ;text-decoration:underline; "> Putovanja su početak svake avanture.</h2>
                    <p style="color:#F4F4E9 ;font-size:20px; padding-top:20px"> 
                    Putovanje nam omogućava da vidimo svet i upoznamo nove kulture.<br></br>
                    Nema ničeg boljeg od dobrog putovanja i iskustva koja nas čekaju na putu.<br></br>
                    Svako putovanje nam pruža priliku da se razvijemo i naučimo nešto novo.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="my" role="dialog" style="margin-top:10px">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" >
                    <div class="container prijava-form">
                        <form action="#" method="post" id="dodajForm">
                            <h3 style="color:#4E7779; text-align: left ">Dodaj novu destinaciju</h3>
                            <div class="row" style="margin-right:650px">
                                <div class="col-md-11 ">
                                    <div class="form-group">
                                        <label style="color:#4E7779" for="">Naziv destinacije</label>
                                        <input type="text" style="border: 1px solid black" name="nazivDestinacije" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label style="color:#4E7779"for="">Broj Ljudi</label>
                                        <input type="text" style="border: 1px solid black" name="brojLjudi" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label style="color:#4E7779" for="">Cena aranzmana</label>
                                        <input type="text" style="border: 1px solid black" name="cena" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <select id="vrstaId" name="vrstaId" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button id="btnDodaj" type="submit" class="btn btn-success btn-block" style="background-color: #90C7CA">
                                            Dodaj destinaciju</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="container pt" style="margin-top:200px; margin-bottom: 300px; ">
    <div id="searchDiv" >
        <label for="pretraga"style="color:white;font-weight:400px ;font-size:25px">Pretrazi destinacije po vrsti putovanja</label>
        <select id="pretraga" onchange="pretraga()" class="form-control" style="color:#4E7779; font-weight:bold ;font-size:20px ;" >
            <?php
            $rez = $conn->query("SELECT * from vrsta");
            while ($red = $rez->fetch_assoc()) {
            ?>
                <option 
                value="<?php echo $red['vrstaId'] ?>"> <?php echo $red['nazivVrste'] ?></option>
            <?php   }
            ?>
        </select>
    </div>

    <div id="podaciPretraga"style="font-weight:bold ;font-size:18px ; color:#4E7779; margin-top:-80px" ></div>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function pretraga() {
            $.ajax({
                url: "handler/pretragaDestinacija.php",
                data: {
                    vrstaId: $("#pretraga").val()
                },
                success: function(html) {
                    $("#podaciPretraga").html(html);
                }
            })
        }
    </script>



</body>

   