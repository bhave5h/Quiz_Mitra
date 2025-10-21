<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>

    $(document).ready(function(){ 
        $('#questionbox').hide();
        $('#add_test').hide();
        $('#submit').hide();
        var srNo = 1;
        
    $("#new_test").click(function(){
        $('#questionbox').show();
        $('#add_test').show();
        $('#submit').show();

        event.preventDefault();
        var noq=$("#noq").val();
        var mpq=$("#mpq").val();
        var tm = noq * mpq;
        console.log(noq , mpq , tm);
        $("#tm").val(tm); 

    for (var i = 0 ; i < noq ; i++ ) {
        var questions=`


        <?php if(isset ($test_id['id'])){ ?>
        <input type ="hidden" name="test_id" value="<?php echo $test_id['id']; ?>">
        <?php } ?>

        
        <div class="question-card mb-4 p-4 bg-white shadow bg-body-tertiary rounded" >
                <label for="test_name" class="form-label"> Question No  ` + srNo +  `</label>

                <div class="input-group flex-nowrap ">
                    <span class="input-group-text" id="addon-wrapping">  ৹  </span>
                    <input type="text" class="form-control" placeholder="Enter Question" id="question_ `+ srNo +`" name="question[]"  aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"> 1 </span>
                    <input type="text" class="form-control" placeholder="Enter option 1" id="opt_1 `+ srNo +`" name="opt_1[]" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"> 2 </span>
                    <input type="text" class="form-control" placeholder="Enter option 2" id="opt_2 `+ srNo +`" name="opt_2[]" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"> 3 </span>
                    <input type="text" class="form-control" placeholder="Enter option 3" id="opt_3 `+ srNo +`" name="opt_3[]" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"> 4 </span>
                    <input type="text" class="form-control" placeholder="Enter option 4" id="opt_4`+ srNo +`" name="opt_4[]" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"> Correct Answer </span>
                    <input type="text" class="form-control" placeholder="Enter Correct Option" id="correct_opt`+ srNo +`" name="correct_opt[]" aria-describedby="addon-wrapping">
                </div>
            </div> 
        <br>` ;
        $("#questionbox").append(questions);
            srNo++;             
        }; 
    });  
});


</script>

<title>Set MCQ Test</title>
    
</head>
<body >
    <?php include('../header.php'); ?>

<div class="container" id="box">

    <h1 class="p-1 px-5">Teacher | Set Test </h1> <hr><br>    

<form action="ctrl_set.php" method="POST" class="px-5" >

        <?php if(isset ($test_id['id'])){ ?>
            <input type ="hidden" name="test_id" value="<?php echo $test_id['id']; ?>">
        <?php } ?>

        <h2>Enter Test Details</h2> <br>

        <div class="mb-3">
            <label for="test_name" class="form-label">Enter Test Name</label>
            <input type="text" class="form-control w-50" id="test_name" name="test_name" placeholder="Example : English Unit Test" >
        </div>

        <div class="mb-3">
            <label for="noq" class="form-label">Number Of Questions</label>
            <input type="text" class="form-control w-25" id="noq" name="noq" >
        </div>

        <div class="mb-3">
            <label for="mpq" class="form-label">Marks Per Question</label>
            <input type="text" class="form-control w-25" id="mpq" name="mpq">
        </div>

        <a class="btn btn-success" id="new_test"> Continue </a>


    <div id="questionbox"> 

        <hr><br>
        <h2>Enter Questions & Options</h2>
        <br><hr>
    </div>    

    <div class="mb-3 bg-white question-card mb-4 p-4 bg-white shadow bg-body-tertiary rounded"  id="submit" >

            <label for="tm" class="form-label ">Total Marks</label>
            <input type="text" class="form-control w-25 " id="tm" name="tm" readonly>
            <br>
            <button type="submit" class="btn btn-success" id="add_test"> Create New MCQ test </button> <br>             
    </div>    
    
</form>

</div> 

</body>
</html>
