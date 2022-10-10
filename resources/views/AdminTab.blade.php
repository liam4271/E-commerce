<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <script>
            if (location.href != 'http://localhost:8000/admin') {
                location.href = 'http://localhost:8000/admin';
            }
        </script>

        <meta charset="utf-8">
        <title>Admin Panel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!--import bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

    <body>

    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Admin Panel</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Ajouter un produit</a></li>
                                <li><a data-toggle="tab" href="#menu1">Liste des produits</a></li>
                                <li><a data-toggle="tab" href="#menu2">Ajouter une catégorie</a></li>
                                <li><a data-toggle="tab" href="#menu3">Liste des catégories</a></li>
                                <li><a data-toggle="tab" href="#menu4">Ajouter un utilisateur</a></li>
                                <li><a data-toggle="tab" href="#menu5">Liste des utilisateurs</a></li>
                                <li><a data-toggle="tab" href="#menu6">Login</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <h3>Ajouter un produit</h3>
                                    <form action="AddProduct" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Nom du produit</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description du produit</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Prix du produit</label>
                                            <input type="text" name="price" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Prix du produit</label>
                                            <select class="form-control form-select" aria-label="Default select example" name="category">
                                                <option selected>Ouvrir le menu pour choisir un catégorie</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->name}}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Ajouter">
                                    </form>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <h3>Liste des produits</h3>
                                    <table class="table">
                                        <thead>
                                            <caption>
                                                Liste des produits
                                            </caption>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom du produit</th>
                                                <th>Description du produit</th>
                                                <th>Prix du produit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->price }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <h3>Ajouter une catégorie</h3>
                                    <form action="AddCategory" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Nom</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Ajouter">
                                    </form>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <h3>Liste des catégories</h3>
                                    <table class="table">
                                        <thead>
                                            <caption>
                                                Liste des categories
                                            </caption>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom de la catégorie</th>
                                                <th>Description de la catégorie</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{$category->id}}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->description }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                    <h3>Ajouter un utilisateur</h3>
                                    <form action="AddUser" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username">Nom d'utilisateur</label>
                                            <input type="text" name="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="first_name">Prenom</label>
                                            <input type="text" name="first_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Nom</label>
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Mot de passe</label>
                                            <input type="text" name="password" class="form-control">
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Ajouter">
                                    </form>
                                </div>
                                <div id="menu5" class="tab-pane fade">
                                    <h3>Liste des utilisateurs</h3>
                                    <table class="table">
                                        <thead>
                                            <caption>
                                                Liste des utilisateurs
                                            </caption>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom d'utilisateur</th>
                                                <th>Prenom</th>
                                                <th>Nom</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->first_name }}</td>
                                                    <td>{{ $user->last_name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div id="menu6" class="tab-pane fade">
                                    <?php
                                    use App\Http\Controllers\TokenController;if(!isset($_COOKIE['connected'])) {
                                        echo "Vous n'êtes pas connecté";
                                    } else {
                                        echo "<p id='logged'>Vous êtes connecté </p>";
                                        echo "Le token est: " . $_COOKIE['connected'] . "<br>";
                                        echo 'Bonjour ' . TokenController::getUsernameByToken($_COOKIE['connected']);
                                     }
                                    ?>
                                    <h3>Connexion</h3>
                                    <form action="Login" method="POST" id="login">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username">Nom d'utilisateur</label>
                                            <input type="text" name="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Mot de passe</label>
                                            <input type="text" name="password" class="form-control">
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Se connecter">
                                    </form>
                                    <form action="Logout" method="POST" id="logout">
                                        @csrf
                                        <input type="submit" class="btn btn-primary" value="Se déconnecter")>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>
        if (document.getElementById('logged') != null) {
            document.getElementById('login').style.display = 'none';
        } else {
            document.getElementById('logout').style.display = 'none';
        }
    </script>

    </body>
</html>
