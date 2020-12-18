
@if(session()->has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> {{ session()->get('success') }}
    </div>

@elseif(session()->has('info'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-info"><i class="fa fa-check-circle"></i> Success</h3> {{ session()->get('info') }}
    </div>

@elseif(session()->has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-danger"><i class="fa fa-times"></i> Failed!</h3>  {{ session()->get('error') }}
    </div>
@endif
