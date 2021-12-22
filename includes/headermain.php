<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Control cash</title>
    
</head>
<style>
        body {
        margin: 0;
        background-color: rgb(163, 210, 236);

    }
    .container {
        width: 100vw;
        height: 60vw;
        
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 20px;

        display: grid;

        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 70px 1fr 100px;
        gap: 10px;
        padding: 10px;
        box-sizing: border-box;
    }
    .container div {
        padding: 10px;
        /* border: 1px solid #000000; */
        background-color: rgb(250, 250, 250);

    }
    .header {
        grid-column-start: 1;
        grid-column-end: 4;
        grid-row-start: 1;
        background-color: rgb(119, 207, 236);
        height: 70px;
        display: flex;
        
    }
    .header-end {
        grid-column-start: 3;
        grid-column-end: 4;
        grid-row-start: 1;
        background-color: rgb(119, 207, 236);
        height: 70px;
        display: flex;
        justify-content:end;
        align-items: center;
    }

    /* .header div {
        grid-column-start: 1;
        grid-column-end: 4;
        grid-row-start: 1;
        background-color: lightblue;
        height: 70px;
        align-items: end;
        
        
    } */
    .content-large{
        grid-row-start: 2;
        grid-column-start: 1;
        grid-column-end: 4;
        
    }
    .footer{
        
        grid-column-start: 1;
        grid-column-end: 3 span;
        height: 5vw;
        text-align: 4;
        
    } 
</style>
<body>
    
    <div class="container">
        <div class="header">
            <h1>Control Cash</h1> 
        </div> 
        <div class="header-end">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastrar.php">Inserir</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>                                               
                        </ul>
                </div>
            </div>
        <div class="content-large">Minha Dashboard
            
        </div>
        

        