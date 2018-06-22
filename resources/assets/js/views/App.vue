<template>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-1">
            <div class="container">
                <a class="navbar-brand" href="#">Files Collection</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars"
                    aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbars">
                    <ul class="navbar-nav mr-auto">
                        <router-link tag="li" class="nav-item" :to="{ name: 'home' }"><a class="nav-link">Home</a></router-link>
                        <router-link tag="li" class="nav-item" :to="{ name: 'about' }"><a class="nav-link">About</a></router-link>
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