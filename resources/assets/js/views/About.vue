<template>
<div>
    <div class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">About</h1>

                    <p class="lead text-muted">Power by
                        <a href="https://laravel.com/">Laravel</a>, Project repo by <a href="https://github.com/">GitHub</a>
                    </p>
                    <p>
                        <a href="https://github.com/cbnuke/FilesCollection" class="btn btn-primary my-2">Project Repository</a>
                        <a href="https://github.com/cbnuke/" class="btn btn-secondary my-2">Creator</a>
                    </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>
                </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

</template>
<script>
export default {};
</script>