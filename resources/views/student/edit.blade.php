<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 Country State City Dropdown</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <div class="container">
        <h2>Laravel 8 Country State City Dropdown</h2>
        <form action="/updatestudent/{{ $student->id }}"  enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">الاسم</label>
                    <input type="text" class="form-control" name='name_ar' id='name' value="{{ $student->name_ar}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name='name_en' id='name' value="{{ $student->name_en }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" accept="image/*"class="form-control" id='image' name='image'>
                </div>
            </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">المرحلة </label>
                <input type="text" class="form-control" id='grade_ar' name='grade_ar' value="{{$student->grade_ar }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">grade </label>
                <input type="text" class="form-control" id='grade_ar' name='grade_en' value="{{$student->grade_en }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">level</label>
                <input type="text" class="form-control" id='level_en' name='level_en' value="{{ $student->level_en  }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">المستوي</label>
                <input type="text" class="form-control" id='level_ar' name='level_ar' value="{{ $student->level_ar  }}">
            </div>
        </div>


        <div class="form-group">
            <div class="form-group col-md-6">
                <input type="text" hidden class="form-control" id='id_facutly' name='id_facutly' value="{{ $student->id_facutly}}">
            </div>
            <div class="form-group col-md-6">
            <select id="state" name="id_department" class="form-control">
                <input type="text" class="form-control" id='id_department'  hidden name='id_department' value="{{ $student->id_department}}">
            </select>
        </div>




        </div>


            <input style="float: left;"  type="submit" class="btn m-1 btn-primary"  />
     </form>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script>
        jQuery(document).ready(function() {
            jQuery('#country').change(function() {
                let id_facutly = jQuery(this).val();

                jQuery('#city').html('<option value="">Select City</option>')
                jQuery.ajax({
                    url: '/getState',
                    type: 'post',
                    data: 'id_facutly=' + id_facutly + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#state').html(result)
                    }
                });
            });


        });
    </script>

</body>

</html>
