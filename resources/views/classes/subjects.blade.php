@extends('layouts.app')

@section('content')

    <!-- Row -->
    <div class="row justify-content-md-center">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">

{{--                        <div class="d-flex justify-content-between mb-3">--}}
                        <div class="text-right">
                            <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary" data-toggle="modal" data-target="#addSubjectModal">New Subject</button>
                        </div>
                            <div class="text-left">
                                <h3 class="subtitle">List of existing school subjects below</h3>
{{--                                <h6 class="card-subtitle">List of existing school subjects below</h6>--}}
                            </div>

{{--                        </div>--}}
                        <div class="table-responsive">
{{--                            @include('partials.notify')--}}
                            <table id="scroll_hor" class="table table-hover table-striped table-bordered display no-wrap"
                                   style="width:100%">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>S/N</th>
                                    <th>Subject Name</th>
                                    <th>Short Name</th>
                                    <th>Subject Department</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subjects as $subject)
                                    <tr>
                                        <td>{{ $subject->id }}</td>
                                        <td>{{ $subject->full_name }}</td>
                                        <td>{{ $subject->short_name }}</td>
                                        <td>{{ $subject->department->dept_name }} </td>


                                        <td >
                                              <button type="button" class="btn btn-info btn-circle mr-2" data-toggle="modal" data-target="#editSubjectModal{{$subject->uuid}}"><i class="fa py-0 px fa-edit"></i></button>
                                           <form  style="display:inline" class="deleteUser" method="post" action="{{route('subject.destroy', $subject->id)}}"> 
                                           @csrf
                                        @method('delete')
                                            <button type="submit" onclick="return confirm('Are you Sure')" class="btn btn-danger btn-circle"><i class="fa fa-times"></i> </button>
                                           
                                             </form>
                                             
                                        </td>
                                    </tr>
                                
   
    <div class="modal fade" id="editSubjectModal{{$subject->uuid}}" tabindex="-1" role="dialog" aria-labelledby="editSubjectModal{{$subject->uuid}}">
<div class="modal-dialog" role="document">
<form  action="{{ route('subject.update',$subject->uuid)}}" method="POST">
                    @method('put')
                        @csrf
            <div class="modal-content">
            
                <div class="modal-header">
                    <h4 class="modal-title" id="#editSubjectModal{{$subject->uuid}}">Edit Subject</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div> 
                <div class="modal-body">
                 
                        <div class="form-group">
                            <label for="full_name" class="control-label">Subject Name</label>
                            <input  type="text"  value="{{$subject->full_name}}" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name">
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('full_name')}}</strong>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="short_name" class="control-label">Subject Short Name</label>
                            <input type="text"  class="form-control @error('short_name') is-invalid @enderror" value="{{$subject->short_name}}" id="short_name" name="short_name">
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('short_name')}}</strong>
                            </span>
                        </div>
                        <div class="form-group">
                            <select name="department" class="select2 @error('department') is-invalid @enderror" style="width: 100%">
                              
                                @foreach($departments as $department)
                                    <option value="{{ $department->uuid }}" @if($department->uuid == $subject->department->uuid) selected @endif>{{ $department->dept_name }}</option>
                                @endforeach
                            </select>
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('department')}}</strong>
                            </span>

                        </div>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-rounded" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-rounded"><i
                            class="fas fa-check"></i> Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>
 
                               @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
    </div>
    <!-- ./Row -->
    <!-- Row -->

    <!-- ./Row -->
     

    <div class="modal fade" id="addSubjectModal" tabindex="-1" role="dialog" aria-labelledby="subjectModalLabel">
        <div class="modal-dialog" role="document">
         <form id="addSubject" action="{{ route('subject.store') }}" method="POST">
                        @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="subjectModalLabel">Create A New Subject</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                   
                        <div class="form-group">
                            <label for="full_name" class="control-label">Subject Name</label>
                            <input value="{{ old('full_name') }}" type="text"  class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" placeholder="Mathematics">
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('full_name')}}</strong>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="short_name" class="control-label">Subject Short Name</label>
                            <input value="{{ old('short_name') }}" type="text"  class="form-control @error('short_name') is-invalid @enderror" id="short_name" name="short_name" placeholder="e.g. MATHS">
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('short_name')}}</strong>
                            </span>
                        </div>
                        <div class="form-group">
                            <select name="department" class="select2 @error('department') is-invalid @enderror" style="width: 100%">
                                <option value="">Select Department</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->uuid }}">{{ $department->dept_name }}</option>
                                @endforeach
                            </select>
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('department')}}</strong>
                            </span>

                        </div>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-rounded" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary btn-rounded"><i
                            class="fas fa-check"></i> Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>
                
  


@endsection


@section('css')
    <!-- page CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/libs/select2/dist/css/select2.min.css">
    <link href="{{ asset('') }}assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
@endsection



@section('scripts')
    <!--This page plugins -->
    <script src="{{ asset('') }}assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="{{ asset('') }}assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="{{ asset('') }}js/pages/forms/select2/select2.init.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/custom-datatable.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/datatable-basic.init.js"></script>

    <script src="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('') }}assets/extra-libs/sweetalert2/sweet-alert.init.js"></script>
    <script src="{{ asset('') }}js/main.js"></script>
    @include('partials.sweet_alert')
   
@endsection


