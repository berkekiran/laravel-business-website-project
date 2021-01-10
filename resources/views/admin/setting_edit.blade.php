@extends('layouts.admin')

@section('title', 'Update Settings Page')

@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

@endsection

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Setting</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="default-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general"
                                                   aria-selected="true">General</a>
                                                <a class="nav-item nav-link" id="nav-smtp-tab" data-toggle="tab" href="#nav-smtp" role="tab" aria-controls="nav-smtp"
                                                   aria-selected="true">Smtp</a>
                                                <a class="nav-item nav-link" id="nav-social-tab" data-toggle="tab" href="#nav-social" role="tab" aria-controls="nav-social"
                                                   aria-selected="true">Social Media</a>
                                                <a class="nav-item nav-link" id="nav-aboutus-tab" data-toggle="tab" href="#nav-aboutus" role="tab" aria-controls="nav-aboutus"
                                                   aria-selected="true">About Us</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                   aria-selected="true">Contact</a>
                                                <a class="nav-item nav-link" id="nav-references-tab" data-toggle="tab" href="#nav-references" role="tab" aria-controls="nav-references"
                                                   aria-selected="true">References</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                                                <div class="form-group">
                                                    <input name="id" type="hidden" class="form-control" value="{{ $setting->id }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Title</label>
                                                    <input name="title" type="text" class="form-control" value="{{ $setting->title }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Keywords</label>
                                                    <input name="keywords" type="text" class="form-control" value="{{ $setting->keywords }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Description</label>
                                                    <input name="description" type="text" class="form-control" value="{{ $setting->description }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Company</label>
                                                    <input name="company" type="text" class="form-control" value="{{ $setting->company }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Address</label>
                                                    <input name="address" type="text" class="form-control" value="{{ $setting->address }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Phone</label>
                                                    <input name="phone" type="number" class="form-control" value="{{ $setting->phone }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Fax</label>
                                                    <input name="fax" type="number" class="form-control" value="{{ $setting->fax }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Email</label>
                                                    <input name="email" type="email" class="form-control" value="{{ $setting->email }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Status</label>
                                                    <select name="status" id="select" class="form-control">
                                                        <option selected="selected">{{ $setting->status }}</option>
                                                        <option value="False">False</option>
                                                        <option value="True">True</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show" id="nav-smtp" role="tabpanel" aria-labelledby="nav-smtp-tab">
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Smtp Server</label>
                                                    <input name="smtpserver" type="text" class="form-control" value="{{ $setting->smtpserver }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Smtp Email</label>
                                                    <input name="smtpemail" type="text" class="form-control" value="{{ $setting->smtpemail }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Smtp Password</label>
                                                    <input name="smtppassword" type="password" class="form-control" value="{{ $setting->smtppassword }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Smtp Port</label>
                                                    <input name="smtpport" type="number" class="form-control" value="{{ $setting->smtpport }}" data-val="true">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Facebook</label>
                                                    <input name="facebook" type="text" class="form-control" value="{{ $setting->facebook }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Instagram</label>
                                                    <input name="instagram" type="text" class="form-control" value="{{ $setting->instagram }}" data-val="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Twitter</label>
                                                    <input name="twitter" type="text" class="form-control" value="{{ $setting->twitter }}" data-val="true">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show" id="nav-aboutus" role="tabpanel" aria-labelledby="nav-aboutus-tab">
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">About Us</label>
                                                    <textarea name="aboutus" id="aboutus">{{ $setting->aboutus }}</textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Contact</label>
                                                    <textarea name="contact" id="contact">{{ $setting->contact }}</textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab">
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">References</label>
                                                    <textarea name="references" id="references">{{ $setting->references }}</textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div>
                                        <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-lg"></i>&nbsp;
                                            <span>Update the Setting</span>
                                        </button>
                                    </div>
                                    <script>
                                        $('#aboutus').summernote({
                                            tabsize: 2,
                                            height: 100
                                        });
                                        $('#contact').summernote({
                                            tabsize: 2,
                                            height: 100
                                        });
                                        $('#references').summernote({
                                            tabsize: 2,
                                            height: 100
                                        });
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© 2020 Berke Kiran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
@endsection
