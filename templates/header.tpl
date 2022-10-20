<!DOCTYPE html>
    <html lang="en">
    <head>
        <base href ={BASE_URL}>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="{BASE_URL}css/styles.css" rel="stylesheet">
        <title>Skincare</title>
        
    </head>
            <body>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home">Skincare</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="home">Home</a>
                            <a class="nav-link" href="brands">Brands</a>
                           
                            
                            {if !isset($smarty.session.USER_ID)}
                                <a class="nav-link" href="login" >Login</a>
                              {else}
                                <a class="nav-link" href="logout">Logout ({$smarty.session.USER_EMAIL})</a>                 
                              {/if}
            
                        </div>
                    </div>
                </div>
            </nav>
            
            