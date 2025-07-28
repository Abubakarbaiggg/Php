<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container p-3 mt-3 bg-success rounded text-white">
                    <form id="addForm" class="mb-3">
                        <label for="" class="form-label">Student Name</label>
                        <input type="text" class="form-control" name="student_name" id="student_name" />
                        <label for="" class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" id="age" />
                        <label for="" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city" />
                        <input type="submit" class="btn btn-primary mt-2" id="save-button" value="Save">
                    </form>
                    <div id="error-message" class="alert alert-danger"></div>
                    <div id="success-message" class="alert alert-success"></div>
            </div>
            <div class="container mt-2 rounded" id="table-data"></div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" >
            $(document).ready(function(){
                function loadTable(){
                     $.ajax({
                        url : "ajax-load.php",
                        type : "POST",
                        success : function(data){
                            $("#table-data").html(data);
                        }
                    })
                }
                loadTable();
                $("#save-button").on("click",function(e){
                    e.preventDefault();

                    var student_name = $("#student_name").val();
                    var age = $("#age").val();
                    var city = $("#city").val();

                    if(student_name == "" || age == "" || city == ""){
                        $("#error-message").html("All Fields Are Required.").slideDown();
                        $("#success-message").slideUp();
                    }else{
                        $.ajax({
                            url : "ajax-insert.php",
                            type : "POST",
                            data : {student_name:student_name,age:age,city:city},
                            success:function(data){
                                if(data == 1){
                                    loadTable();
                                    $("#addForm").trigger("reset");
                                    $("#success-message").html("Data Inserted Successfully.").slideDown();
                                    $("#error-message").slideUp();
                                }else{
                                      $("#error-message").html("Can't Save Record.").slideDown();
                                      $("#success-message").slideUp();
                                }
                            }
                        })
                    }
                })

            })
        </script>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
