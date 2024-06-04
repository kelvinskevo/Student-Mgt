@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Students

            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/students">Students</a></li>
                <li class="active">Add New Student</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add New Student</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        @include('messages')
                        <form action="{{ route('students.store') }}" method="POST" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                placeholder="Enter Name" value="{{ old('name') }}">
                                            @error('name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input type="text" name="mobile" id="mobile"
                                                class="form-control @error('mobile') is-invalid @enderror"
                                                placeholder="Enter Mobile" value="{{ old('mobile') }}">
                                            @error('mobile')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Enter Email" value="{{ old('email') }}">
                                            @error('email')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" name="dob" id="dob"
                                                class="form-control @error('dob') is-invalid @enderror"
                                                placeholder="Enter Date of Birth" value="{{ old('dob') }}">
                                            @error('dob')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="profile_pic">Profile Picture</label>
                                            <input type="file" name="profile_pic" id="profile_pic"
                                                class="form-control @error('profile_pic') is-invalid @enderror"
                                                value="{{ old('profile_pic') }}">
                                            @error('profile_pic')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- Image preview -->
                                        <div class="form-group">
                                            <img id="profile_pic_preview" src="{{ (!empty->)}}"
                                                alt="Profile Picture Preview"
                                                style="display: none; max-width: 200px; max-height: 200px;">
                                        </div>
                                        <script>
                                            function previewProfilePic(event) {
                                                const input = event.target;
                                                const file = input.files[0];
                                                const preview = document.getElementById('profile_pic_preview');

                                                if (file) {
                                                    const reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        preview.src = e.target.result;
                                                        preview.style.display = 'block';
                                                    };
                                                    reader.readAsDataURL(file);
                                                } else {
                                                    preview.src = '';
                                                    preview.style.display = 'none';
                                                }
                                            }
                                        </script>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" id="address"
                                                class="form-control @error('address') is-invalid @enderror"
                                                placeholder="Enter Address" value="{{ old('address') }}">
                                            @error('address')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender"
                                                class="form-control   @error('gender') is-invalid @enderror">
                                                <option>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>

                                            @error('gender')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="class">Class</label>
                                            <select name="class" id="class"
                                                class="form-control @error('class') is-invalid @enderror">
                                                <option value="">Select Course</option>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('class')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="religion">Religion</label>
                                            <select name="religion" id="religion"
                                                class="form-control @error('religion') is-invalid @enderror">
                                                <option>Select Religion</option>
                                                <option value="christianity">Christianity</option>
                                                <option value="islam">Islam</option>
                                                <option value="hinduism">Hinduism</option>
                                                <option value="buddhism">Buddhism</option>
                                                <option value="sikhism">Sikhism</option>
                                                <option value="judaism">Judaism</option>
                                                <option value="bahai">Bahá'í</option>
                                                <option value="shinto">Shinto</option>
                                                <option value="jainism">Jainism</option>
                                                <option value="zoroastrianism">Zoroastrianism</option>
                                                <option value="taoism">Taoism</option>
                                                <option value="confucianism">Confucianism</option>
                                                <option value="atheism">Atheism</option>
                                                <option value="agnosticism">Agnosticism</option>
                                                <option value="other">Other</option>
                                            </select>

                                            @error('religion')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="blood_group">Blood Group</label>
                                            <select name="blood_group" id="blood_group"
                                                class="form-control @error('blood_group') is-invalid @enderror">
                                                <option>Select Blood Group</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>

                                            @error('blood_group')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>





                                {{-- <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">

                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div> --}}
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <script>
        function previewProfilePic(event) {
            const input = event.target;
            const file = input.files[0];
            const preview = document.getElementById('profile_pic_preview');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }
    </script>
@endsection
