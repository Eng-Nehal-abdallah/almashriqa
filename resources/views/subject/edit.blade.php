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
        <form action="/updatesubject/{{ $subject->id }}"  enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">الاسم</label>
                    <input type="text" class="form-control" name='name_ar' id='name' value="{{ $subject->name_ar}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name='name_en' id='name' value="{{ $subject->name_en }}">
                </div>
            </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">كود المادة</label>
                <input type="text" class="form-control" id='code' name='code' value="{{$subject->code }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">level</label>
                <input type="text" class="form-control" id='level_en' name='level_en' value="{{ $subject->level_en  }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">المستوي</label>
                <input type="text" class="form-control" id='level_ar' name='level_ar' value="{{ $subject->level_ar  }}">
            </div>
        </div>


        <div class="form-group col-md-6">
            <label for="input">type</label>
            <select name="type" id="type" class="form-select">
              <option value="">Select type</option>

              <option value="private">خاص</option>
              <option value="public">عام</option>

            </select>
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
