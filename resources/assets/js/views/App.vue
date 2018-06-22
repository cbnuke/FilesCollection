<template>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-1">
            <div class="container">
                <a class="navbar-brand" href="#">Files Collection</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07"
                    aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <router-link to="/"><a>url to example</a></router-link>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

     <main role="main">
        <router-view></router-view>
     </main>

    <footer class="footer">
        <div class="container">
            <span class="float-right">
                <a href="#">Back to top</a>
            </span>
            <span class="text-muted">Album example is &copy; Bootstrap, but please download and customize it for yourself!</span>
        </div>
    </footer>
    </div>
    
</template>
<script>
export default {};
</script>