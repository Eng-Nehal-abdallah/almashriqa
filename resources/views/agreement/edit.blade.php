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
        <form action="/updateagreement/{{ $agreement->id }}"  enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <img src="/{{ $agreement->image }}" width="100" height="100" alt="image">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">الاسم</label>
                    <input type="text" class="form-control" name='name_ar' id='name' value="{{ $agreement->name_ar}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name='name_en' id='name' value="{{ $agreement->name_en }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">الكلام المختصر</label>
                    <input type="text" class="form-control" name='abstract_ar' id='abstract_ar' value="{{ $agreement->abstract_ar}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="name">Abstractof Word</label>
                    <input type="text" class="form-control" name='abstract_en' id='abstract_en' value="{{ $agreement->abstract_en }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">التفاصيل </label>
                    <input type="text" class="form-control" name='details_ar' id='details_ar' value="{{ $agreement->details_ar}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="name">Details</label>
                    <input type="text" class="form-control" name='details_ar' id='details_ar' value="{{ $agreement->details_ar }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id='image' name='image'>
                </div>



                    <div class="form-group col-md-6">
                        <label for="image">pdf</label>
                        <input type="file" class="form-control" id='pdf' name='pdf'>
                    </div>

                </div>




        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">التفاصيل</label>
                <input type="text" class="form-control" id='details_ar' name='details_ar' value="{{$agreement->details_ar }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">details</label>
                <input type="text" class="form-control" id='details_en' name='details_en' value="{{ $agreement->details_en  }}">
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