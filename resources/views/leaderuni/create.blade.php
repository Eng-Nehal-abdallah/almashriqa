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
        <form action="/create_doctor"  enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="name">الاسم</label>
                    <input type="text" class="form-control" name='name_ar' id='name'>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name='name_en' id='name'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" accept="image/*" class="form-control" id='image' name='image'>
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id='email' name='email'>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="university_certified_ar">الجامعه الحاصل منها علي الشهاده</label>
                    <input type="text" class="form-control" id='university_certified_ar'
                        name='university_certified_ar'>
                </div>
                <div class="form-group col-md-6">
                    <label for="university_certified_en">university_certified</label>
                    <input type="text" class="form-control" id='university_certified_en'
                        name='university_certified_en'>
                </div>

            </div>

            <div class="form-group col-md-6">
                <label for="facutly_certified_ar">الكلية الحاصل منها علي الشهاده </label>
                <input type="text" class="form-control" id='facutly_certified_ar' name='facutly_certified_ar'>
            </div>
            <div class="form-group col-md-6">
                <label for="facutly_certified_en">facutly_certified</label>
                <input type="text" class="form-control" id='facutly_certified_en' name='facutly_certified_en'>
            </div>

            <div class="form-group col-md-6">
                <label for="certified_ar">الشهاده</label>
                <input type="text" class="form-control" id='certified_ar' name='certified_ar'>
            </div>
            <div class="form-group col-md-6">
                <label for="certified_">certified</label>
                <input type="text" class="form-control" id='certified_en' name='certified_en'>
            </div>

            <div class="form-group">
                <div class="form-group col-md-6">
                <select id="country" name="id_facutly" class="form-control">
                    <option value="">الكلية</option>
                    @foreach ($facutlies as $list)
                        <option value="{{ $list->id }}">{{ $list->name_ar }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group col-md-6">
                <select id="state" name="id_department" class="form-control">
                    <option value="">القسم</option>
                </select>
            </div>




            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="position_ar">المنصب الحالي</label>
                    <input type="text" class="form-control" id='position_ar' name='position_ar'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="posiotion_en">position</label>
                    <input type="text" class="form-control" id='posiotion_en' name='posiotion_en'>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="gender">النوع</label>
                <select name="gender_ar" id="gender" class="form-select">
                    <option value="">Select Gender</option>


                    <option value="انثي">انثي</option>
                    <option value="ذكر">ذكر</option>

                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <select name="gender_en" id="gender" class="form-select">
                    <option value="">Select Gender</option>


                    <option value="female">Female</option>
                    <option value="male">Male</option>

                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="country_ar">الدوله</label>
                    <select name="country_ar" class="form-select">
                        <option value="0">Select country_ar</option>
                        <option value="آروبا">آروبا</option>
                        <option value="أذربيجان">أذربيجان</option>
                        <option value="أرمينيا">أرمينيا</option>
                        <option value="أسبانيا ">أسبانيا</option>
                        <option value="أستراليا">أستراليا</option>
                        <option value="أفغانستان">أفغانستان</option>
                        <option value="ألبانيا">ألبانيا</option>
                        <option value="ألمانيا">ألمانيا</option>
                        <option value="أنتيجوا وبربودا">أنتيجوا وبربودا</option>
                        <option value="أنجولا">أنجولا</option>
                        <option value="أنجويلا">أنجويلا</option>
                        <option value="أندورا">أندورا</option>
                        <option value="أورجواي">أورجواي</option>
                        <option value="أوزبكستان">أوزبكستان</option>
                        <option value="أوغندا">أوغندا</option>
                        <option value="أوكرانيا">أوكرانيا</option>
                        <option value="أيرلندا">أيرلندا</option>
                        <option value="أيسلندا">أيسلندا</option>
                        <option value="اثيوبيا">اثيوبيا</option>
                        <option value="اريتريا">اريتريا</option>
                        <option value="استونيا">استونيا</option>
                        <option value="اسرائيل">اسرائيل</option>
                        <option value="الأرجنتين">الأرجنتين</option>
                        <option value="الأردن">الأردن</option>
                        <option value="الاكوادور">الاكوادور</option>
                        <option value="لامارات العربية المتحدة">الامارات العربية المتحدة</option>
                        <option value="الباهاما">الباهاما</option>
                        <option value="البحرين">البحرين</option>
                        <option value="البرازيل">البرازيل</option>
                        <option value="البرتغال">البرتغال</option>
                        <option value="البوسنةوالهرسك">البوسنة والهرسك</option>
                        <option value="الجابون">الجابون</option>
                        <option value="الجبل الأسود">الجبل الأسود</option>
                        <option value="الجزائر">الجزائر</option>
                        <option value="الدانمرك">الدانمرك</option>
                        <option value="الرأس الأخضر">الرأس الأخضر</option>
                        <option value="السلفادور">السلفادور</option>
                        <option value="السنغال">السنغال</option>
                        <option value="السودان ">السودان</option>
                        <option value="السويد">السويد</option>
                        <option value="الصحراء الغربية">الصحراء الغربية</option>
                        <option value="الصومال">الصومال</option>
                        <option value="الصين">الصين</option>
                        <option value="العراق">العراق</option>
                        <option value="الفاتيكان">الفاتيكان</option>
                        <option value="الفيلبين">الفيلبين</option>
                        <option value="القطب الجنوبي">القطب الجنوبي</option>
                        <option value="الكاميرون">الكاميرون</option>
                        <option value="الكونغو - برازافيل">الكونغو - برازافيل</option>
                        <option value="الكويت">الكويت</option>
                        <option value="المجر">المجر</option>
                        <option value="المحيط الهندي البريطاني">المحيط الهندي البريطاني</option>
                        <option value="المغرب">المغرب</option>
                        <option value="المقاطعات الجنوبية الفرنسية">المقاطعات الجنوبية الفرنسية</option>
                        <option value="المكسيك">المكسيك</option>
                        <option value="المملكة العربية السعودية">المملكة العربية السعودية</option>
                        <option value="المملكة المتحدة">المملكة المتحدة</option>
                        <option value="النرويج">النرويج</option>
                        <option value="النمسا">النمسا</option>
                        <option value="النيجر">النيجر</option>
                        <option value="الهند">الهند</option>
                        <option value="الولايات المتحدة الأمريكية">الولايات المتحدة الأمريكية</option>
                        <option value="اليابان">اليابان</option>
                        <option value="اليمن">اليمن</option>
                        <option value="اليونان">اليونان</option>
                        <option value="اندونيسيا">اندونيسيا</option>
                        <option value="ايران">ايران</option>
                        <option value="ايطاليا">ايطاليا</option>
                        <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                        <option value="باراجواي">باراجواي</option>
                        <option value="باكستان">باكستان</option>
                        <option value="بالاو">بالاو</option>
                        <option value="بتسوانا">بتسوانا</option>
                        <option value="بتكايرن">بتكايرن</option>
                        <option value="بربادوس">بربادوس</option>
                        <option value="برمودا ">برمودا</option>
                        <option value="بروناي">بروناي</option>
                        <option value="بلجيكا">بلجيكا</option>
                        <option value="بلغاريا">بلغاريا</option>
                        <option value="بليز">بليز</option>
                        <option value="بنجلاديش">بنجلاديش</option>
                        <option value="بنما">بنما</option>
                        <option value="بنين">بنين</option>
                        <option value="بوتان">بوتان</option>
                        <option value="بورتوريكو">بورتوريكو</option>
                        <option value="بوركينا فاسو">بوركينا فاسو</option>
                        <option value="بوروندي">بوروندي</option>
                        <option value="بولندا">بولندا</option>
                        <option value="بوليفيا">بوليفيا</option>
                        <option value="بولينيزيا الفرنسية">بولينيزيا الفرنسية</option>
                        <option value="بيرو">بيرو</option>
                        <option value="تانزانيا">تانزانيا</option>
                        <option value="تايلند">تايلند</option>
                        <option value="تايوان">تايوان</option>
                        <option value="تركمانستان">تركمانستان</option>
                        <option value="تركيا">تركيا</option>
                        <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                        <option value="تشاد">تشاد</option>
                        <option value="توجو">توجو</option>
                        <option value="توفالو">توفالو</option>
                        <option value="توكيلو">توكيلو</option>
                        <option value="تونجا">تونجا</option>
                        <option value="تونس">تونس</option>
                        <option value="تيمور الشرقية">تيمور الشرقية</option>
                        <option value="جامايكا">جامايكا</option>
                        <option value="طارق">جبل طارق</option>
                        <option value="جرينادا">جرينادا</option>
                        <option value="جرينلاند">جرينلاند</option>
                        <option value="جزر اولان">جزر أولان</option>
                        <option value="جزر الأنتيل الهولندية">جزر الأنتيل الهولندية</option>
                        <option value="جزر الترك وجايكوس">جزر الترك وجايكوس</option>
                        <option value="جزر القمر">جزر القمر</option>
                        <option value="جزر الكايمن">جزر الكايمن</option>
                        <option value="جزر المارشال">جزر المارشال</option>
                        <option value="جزر الملديف">جزر الملديف</option>
                        <option value="جزر الولايات المتحدة البعيدة الصغيرة">جزر الولايات المتحدة البعيدة الصغيرة</option>
                        <option value="جزر سليمان">جزر سليمان</option>
                        <option value="جزر فارو">جزر فارو</option>
                        <option value="جزر فرجين الأمريكية">جزر فرجين الأمريكية</option>
                        <option value="جزر فرجين البريطانية">جزر فرجين البريطانية</option>
                        <option value="جزر فوكلاند">جزر فوكلاند</option>
                        <option value="جزر كوك">جزر كوك</option>
                        <option value="جزر كوكوس">جزر كوكوس</option>
                        <option value="جزر ماريانا الشمالية">جزر ماريانا الشمالية</option>
                        <option value="جزر والس وفوتونا">جزر والس وفوتونا</option>
                        <option value="جزيرة الكريسماس">جزيرة الكريسماس</option>
                        <option value="جزيرة بوفيه">جزيرة بوفيه</option>
                        <option value="جزيرة مان">جزيرة مان</option>
                        <option value="جزيرة نورفوك">جزيرة نورفوك</option>
                        <option value="جزيرة هيرد وماكدونالد">جزيرة هيرد وماكدونالد</option>
                        <option value="جمهورية افريقيا الوسطى">جمهورية افريقيا الوسطى</option>
                        <option value="جمهورية التشيك">جمهورية التشيك</option>
                        <option value="جمهورية الدومينيك">جمهورية الدومينيك</option>
                        <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                        <option value="جمهورية جنوب افريقيا">جمهورية جنوب افريقيا</option>
                        <option value="جواتيمالا">جواتيمالا</option>
                        <option value="جوادلوب">جوادلوب</option>
                        <option value="جوام">جوام</option>
                        <option value="جورجيا">جورجيا</option>
                        <option value="جورجيا الجنوبية وجزر ساندويتش الجنوبية">جورجيا الجنوبية وجزر ساندويتش الجنوبية</option>
                        <option value="جيبوتي">جيبوتي</option>
                        <option value="جيرسي">جيرسي</option>
                        <option value="دومينيكا">دومينيكا</option>
                        <option value="رواندا">رواندا</option>
                        <option value="روسيا">روسيا</option>
                        <option value="روسيا البيضاء">روسيا البيضاء</option>
                        <option value="رومانيا">رومانيا</option>
                        <option value="روينيون">روينيون</option>
                        <option value="زامبيا">زامبيا</option>
                        <option value="زيمبابوي">زيمبابوي</option>
                        <option value="ساحل العاج">ساحل العاج</option>
                        <option value="ساموا">ساموا</option>
                        <option value="ساموا الأمريكية">ساموا الأمريكية</option>
                        <option value="سان مارينو">سان مارينو</option>
                        <option value="سانت بيير وميكولون">سانت بيير وميكولون</option>
                        <option value="سانت فنسنت وغرنادين">سانت فنسنت وغرنادين</option>
                        <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                        <option value="سانت لوسيا">سانت لوسيا</option>
                        <option value="سانت مارتين">سانت مارتين</option>
                        <option value="سانت هيلنا">سانت هيلنا</option>
                        <option value="ساو تومي وبرينسيبي">ساو تومي وبرينسيبي</option>
                        <option value="سريلانكا">سريلانكا</option>
                        <option value="سفالبارد وجان مايان">سفالبارد وجان مايان</option>
                        <option value="سلوفاكيا">سلوفاكيا</option>
                        <option value="سلوفينيا">سلوفينيا</option>
                        <option value="سنغافورة">سنغافورة</option>
                        <option value="سوازيلاند">سوازيلاند</option>
                        <option value="سوريا">سوريا</option>
                        <option value="سورينام">سورينام</option>
                        <option value="سويسرا">سويسرا</option>
                        <option value="سيراليون">سيراليون</option>
                        <option value="سيشل">سيشل</option>
                        <option value="شيلي">شيلي</option>
                        <option value="صربيا">صربيا</option>
                        <option value="صربيا والجبل الأسود">صربيا والجبل الأسود</option>
                        <option value="طاجكستان">طاجكستان</option>
                        <option value="عمان">عمان</option>
                        <option value="غامبيا">غامبيا</option>
                        <option value="غانا">غانا</option>
                        <option value="غويانا">غويانا</option>
                        <option value="غيانا">غيانا</option>
                        <option value="غينيا">غينيا</option>
                        <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                        <option value="غينيا بيساو">غينيا بيساو</option>
                        <option value="فانواتو">فانواتو</option>
                        <option value="فرنسا">فرنسا</option>
                        <option value="فلسطين">فلسطين</option>
                        <option value="فنزويلا">فنزويلا</option>
                        <option value="فنلندا">فنلندا</option>
                        <option value="فيتنام">فيتنام</option>
                        <option value="فيجي">فيجي</option>
                        <option value="قبرص">قبرص</option>
                        <option value="قرغيزستان">قرغيزستان</option>
                        <option value="قطر">قطر</option>
                        <option value="كازاخستان">كازاخستان</option>
                        <option value="كاليدونيا الجديدة">كاليدونيا الجديدة</option>
                        <option value="كرواتيا">كرواتيا</option>
                        <option value="كمبوديا">كمبوديا</option>
                        <option value="كندا">كندا</option>
                        <option value="كوبا">كوبا</option>
                        <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                        <option value="كوريا الشمالية">كوريا الشمالية</option>
                        <option value="كوستاريكا">كوستاريكا</option>
                        <option value="كولومبيا">كولومبيا</option>
                        <option value="كيريباتي">كيريباتي</option>
                        <option value="كينيا">كينيا</option>
                        <option value="لاتفيا">لاتفيا</option>
                        <option value="لاوس">لاوس</option>
                        <option value="لبنان">لبنان</option>
                        <option value="لوكسمبورج">لوكسمبورج</option>
                        <option value="ليبيا">ليبيا</option>
                        <option value="ليبيريا">ليبيريا</option>
                        <option value="ليتوانيا">ليتوانيا</option>
                        <option value="ليختنشتاين">ليختنشتاين</option>
                        <option value="ليسوتو">ليسوتو</option>
                        <option value="مارتينيك">مارتينيك</option>
                        <option value="ماكاو الصينية">ماكاو الصينية</option>
                        <option value="مالطا">مالطا</option>
                        <option value="مالي">مالي</option>
                        <option value="ماليزيا">ماليزيا</option>
                        <option value="مايوت">مايوت</option>
                        <option value="مدغشقر">مدغشقر</option>
                        <option value="مصر">مصر</option>
                        <option value="مقدونيا">مقدونيا</option>
                        <option value="ملاوي">ملاوي</option>
                        <option value="منطقة غير معرفة">منطقة غير معرفة</option>
                        <option value="منغوليا">منغوليا</option>
                        <option value="موريتانيا">موريتانيا</option>
                        <option value="موريشيوس">موريشيوس</option>
                        <option value="موزمبيق">موزمبيق</option>
                        <option value="مولدافيا">مولدافيا</option>
                        <option value="موناكو">موناكو</option>
                        <option value="مونتسرات">مونتسرات</option>
                        <option value="ميانمار">ميانمار</option>
                        <option value="ميكرونيزيا">ميكرونيزيا</option>
                        <option value="ناميبيا">ناميبيا</option>
                        <option value="نورو">نورو</option>
                        <option value="نيبال">نيبال</option>
                        <option value="نيجيريا">نيجيريا</option>
                        <option value="نيكاراجوا">نيكاراجوا</option>
                        <option value="نيوزيلاندا">نيوزيلاندا</option>
                        <option value="نيوي">نيوي</option>
                        <option value="هايتي">هايتي</option>
                        <option value="هندوراس">هندوراس</option>
                        <option value="هولندا">هولندا</option>
                        <option value="هونج كونج الصينية">هونج كونج الصينية</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="country_en">Country </label>
                    <select id="country_en" name="country_en" class="form-select">
                        <option value="0">Select country</option>
                         <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="shift_ar">الفترة</label>
                <select name="shift_ar" id="shift_ar" class="form-select">
                    <option value="0">Select shift_ar</option>


                    <option value="صباحي">صباحي</option>
                    <option value="مسائي">مسائي</option>

                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="shift_en">Shift en</label>
                <select name="shift_en" id="shift_en" class="form-select">
                    <option value="">Select shift_en</option>


                    <option value="morning">Morning</option>
                    <option value="night">Night</option>

                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Nationality_ar">الجنسيه</label>
                    <select name="Nationality_ar" class="form-select">
                        <optionvalue = "أفغاني"> الأفغانية </option>
                            <option value = "الألبانية "> الألبانية </ option>
                            <option value = "جزائري "> جزائري </option>
                            <option value = "أمريكي "> أمريكي </ </option>
                            <option value = "أندورا  "> أندورا </ option>
                            <option value = " الأنغولية "> الأنغولية </ option>
      <optionvalue = "أنتيجوان "> أنتيجوان</option>
                            <option value = "أرجنتينية "> أرجنتينية </ option>
                            <option value = "أرميني  "> أرميني </ option>
                            <option value = "الأسترالية "> الأسترالية </ option>
                            <option value = "النمساوي "> النمساوي </ option>
                            <option value = " أذربيجان "> أذربيجان </ option>
                            <option value = " الباهامية "> الباهامية </ option>
                            <option value = " bahraini "> بحريني </ option>
                            <option value = "بنجلاديشية "> بنجلاديشية </ option>
                            <option value = " باربادوس "> باربادوس </ option>
                            <option value = " باربودان"> باربودان</option>
                            <option value = "باتسوانا "> باتسوانا </ option>
                            <option value = "البيلاروسية "> البيلاروسية </ option>
                            <option value = " البلجيكي "> البلجيكي </ option>
                            <option value = "البليزية "> البليزية </ option>
                            <option value = "البنيني "> البنيني </ option>
                            <option value = " بوتاني "> بوتاني </ option>
                            <option value = " البوليفية "> البوليفية </ option>
                            <option value = " bosnian "> البوسنية </ option>
                            <option value = "برازيلي "> برازيلي </ option>
                            <option value = " بريطاني "> بريطاني </ option>
                            <option value = "بروناي "> بروناي </ option>
                            <option value = " البلغارية "> البلغارية </ option>
                            <option value = "بوركينابي "> بوركينا فاسو </ option>









    <option value = "البورمية "> البورمية </ option>
                            <option value = "بوروندي "> بوروندي </ option>
                            <option value = "الكمبودية "> الكمبودية </ option>
                            <option value = "الكاميرونية "> الكاميرونية </ option>
                            <option value = " كندي "> كندي </ option>
                            <option value = "الرأس الأخضر "> الرأس الأخضر </ option>
                            <option value = "فريقيا الوسطى "> إفريقيا الوسطى </ option>
                            <option value = "التشادية "> التشادية </ option>
                            <option value = "تشيلي "> تشيلي </ option>
                            <option value = "صيني"> صيني</ option>
                            <option value = "الكولومبية "> الكولومبية </ option>
                            <option value = "جزر القمر"> جزر القمر </ option>
                            <option value = " الكونغولية"> الكونغولية </ option>
                            <option value = "كوستاريكا"> كوستاريكا </ option>
                            <option value = " الكرواتية"> الكرواتية </ option>
                            <option value = "لكوبي "> الكوبي </ option>
                            <option value = "قبرصية "> قبرصية </ option>
                            <option value = "التشيكية"> التشيكية </ option>
                            <option value = "دانماركي"> دانماركي </ option>
                            <option value = "جيبوتي"> جيبوتي </ option>
                            <option value = "الدومينيكان"> الدومينيكان </ option>
                            <option value = "الهولنديه"> الهولندية </ option>
                            <option value = "التيموريون الشرقيون"> التيموريون الشرقيون </ option>
                            <option value = "إكوادوري"> إكوادوري </ option>
                            <option value = "مصري "> مصري </ option>
                            <option value = "إماراتي "> إماراتي </ option>
                            <option value = "غينيا الاستوائية"> غينيا الاستوائية </ option>
                            <option value = "ريتريا"> إريتريا </ option>
                            <option value = "الإستونية "> الإستونية </ option>
                            <option value = "الإثيوبية"> الإثيوبية </ option>
                            <option value = "الفيجية "> الفيجية </ option>
                            <option value = "لفلبينية"> الفلبينية </ option>
                            <option value = "الفنلندية "> الفنلندية </ option>
                            <option value = "الفرنسية"> الفرنسية </ option>
                            <option value = "الجابون "> الجابون </ option>
                            <option value = "غامبيان"> غامبيا </ option>
                            <option value = "الجورجية"> الجورجية </ option>
                            <option value = "الألمانية"> الألمانية </ option>
                            <option value = "غاني "> غاني </ option>
                            <option value = "اليونانية "> اليونانية </ option>
                            <option value = "غرينادية"> غرينادية </ option>
                            <option value = "غواتيمالا"> غواتيمالا </ option>
                            <option value = "غينيا بيساو"> غينيا بيساو </ option>
                            <option value = "غينيا"> غينيا </ option>
                            <option value = "جوياني"> جوياني </ option>
                            <option value = "الهايتية "> الهايتية </ option>
                            <option value = "الهيرزيغوفينيون"> الهيرزيغوفينيون </ option>
                            <option value = "هندوراس "> هندوراس </ option>
                            <option value = "المجرية"> المجرية </ option>
                            <option value = "أيسلندي "> أيسلندي </ option>
                            <option value = "هندي "> هندي </ option>
                            <option value = "الإندونيسية"> الإندونيسية </ option>
                            <option value = "إيراني"> إيراني </ option>
                            <option value = "عراقي"> عراقي </ option>
                            <option value = "الأيرلندية"> الأيرلندية </ option>
                            <option value = "إسرائيلي"> إسرائيلي </ option>
                            <option value = "إيطالي "> إيطالي </ option>
                            <option value = "ساحل العاج"> ساحل العاج </ option>
                            <option value = "جامايكا "> جامايكا </ option>
                            <option value = "اليابانية"> اليابانية </ option>
                            <option value = "أردني"> أردني </ option>
                            <option value = "لكازاخستانية"> الكازاخستانية </ option>












    <option value = "الكينية "> الكينية </ option>
                            <option value = "كيتيان ونيفيسيان"> كيتيان ونيفيسيان </option>
                            <option value = "كويتي "> كويتي </ option>
                            <option value = "قيرغيزستان"> قيرغيزستان </ option>
                            <option value = "اللاوسية"> اللاوسية </ option>
                            <option value = "اللاتفية "> اللاتفية </ option>
                            <option value = "لبناني"> لبناني </ option>
                            <option value = "الليبيرية "> الليبيرية </ option>
                            <option value = "ليبي "> ليبي </ option>
                            <option value = "ليختنشتاينر "> ليختنشتاينر </ option>
                            <option value = "لليتوانية"> الليتوانية </ option>
                            <option value = "لوكسمبورجر"> لوكسمبورجر </ option>
                            <option value = "المقدونية"> المقدونية </ option>
                            <option value = "الملغاشية"> الملغاشية </ option>
                            <option value = "الملاوية"> الملاوية </ option>
                            <option value = "الماليزية "> الماليزية </ option>
                            <option value = "المالديف"> المالديف </ option>
                            <option value = "مالي"> مالي </ option>
                            <option value = "المالطية "> المالطية </ option>
                            <option value = "مارشال"> مارشال</option>
                            <option value = "الموريتانية"> الموريتانية </ option>
                            <option value = "موريشيوس"> موريشيوس </ option>
                            <option value = "مكسيكي"> مكسيكي </ option>
                            <option value = "ميكرونيزي"> ميكرونيزي </ option>
                            <option value = "مولدوفا"> مولدوفا </ option>
                            <option value = "موناكان"> موناكان </option>
                            <option value = "المنغولية "> المنغولية </ option>
                            <option value = " مغربية"> مغربية </ option>
                            <option value = "موسوثو"> موسوثو</option>
                            <option value = " موتسوانا"> موتسوانا </ option>
                            <option value = "موزمبيق"> موزمبيق </ option>
                            <option value = "الناميبية"> الناميبية </ option>
                            <option value = "ناورو "> ناورو </ option>
                            <option value = "نيبالي"> نيبالي </ option>
                            <option value = "نيوزيلندي"> نيوزيلندي </ option>
                            <option value = "ني فانواتو"> ني فانواتو </option>
                            <option value = "نيكاراغوا"> نيكاراغوا </ option>
                            <option value = "النيجر"> النيجر </ option>
                            <option value = "كوريا الشمالية"> كوريا الشمالية </ option>
                            <option value = "إيرلندا الشمالية"> إيرلندا الشمالية </ option>
                            <option value = "النرويجية"> النرويجية </ option>
                            <option value = "عماني "> عماني </ option>
                            <option value = "باكستاني "> باكستاني </ option>
                            <option value = "بالاوان "> بالاوان </ option>
                            <option value = "بنمي "> بنمي </ option>
                            <option value = "بابوا غينيا الجديدة"> بابوا غينيا الجديدة </ option>
                            <option value = "باراجواي"> باراجواي </ option>
                            <option value = "بيرو "> بيرو </ option>
                            <option value = "البولندية"> البولندية </ option>
                            <option value = "البرتغالية"> البرتغالية </ option>
                            <option value = " قطري "> قطري </ option>
                            <option value = "الرومانية"> الرومانية </ option>
                            <option value = "الروسية"> الروسية </ option>
                            <option value = "الرواندية "> الرواندية </ option>
                            <option value = "سانت لوسيان"> سانت لوسيان </ option>
                            <option value = " سلفادوريئئئ"> سلفادوري </ option>
                            <option value = "سامئوا"> سامئوا </ option>
                            <option value = "سان مارينيز"> سان مارينيز </ option>
                            <option value = "ساو توميان"> ساو توميان </ option>
                            <option value = " سعودي"> سعودي </option>
                            <option value = "اسكتلندي"> اسكتلندي </ option>
                            <option value = "سنغالي "> سنغالي </ option>
                            <option value = "الصربية "> الصربية </ option>
                            <option value = "السيشيلية"> السيشيلية </ option>
                            <option value = "سيراليوني"> سيراليوني </ option>
                            <option value = " سنغافورية"> سنغافورية </ option>
                            <option value = السلوفاكية"> السلوفاكية </ option>
                            <option value = "السلوفينية"> السلوفينية </ option>
                            <option value = "جزر سليمان"> جزر سليمان </ option>
                            <option value = " صومالي"> صومالي </ option>
                            <option value = "جنوب إفريقيا"> جنوب إفريقيا </ option>
                            <option value = كوريا الجنوبية "> كوريا الجنوبية </ option>

    <option value = "الإسبانية "> الإسبانية </ option>
                            <option value = "السريلانكية"> السريلانكية </ option>
                            <option value = "سوداني"> سوداني </option>
                            <option value = "سورينامير"> سورينامير </ option>
                            <option value = "سوازي "> سوازي </ option>
                            <option value = "السويدية"> السويدية </ option>
                            <option value = "سويسري"> سويسري </option>
                            <option value = "سوري "> سوري </ option>
                            <option value = "التايوانية"> التايوانية </ option>
                            <option value = "الطاجيكية"> الطاجيكية </ option>
                            <option value = "التنزانية"> التنزانية </ option>
                            <option value = "لتايلاندية"> التايلاندية </ option>
                            <option value = "لتوغولية"> التوغولية </ option>
                            <option value = "تونجا "> تونجا </ option>
                            <option value = "الترينيدادية أو التوباغونية"> الترينيدادية أو التوباغونية </ option>
                            <option value = "تونسي "> تونسي </ option>
                            <option value = "التركية "> التركية </ option>
                            <option value = "توفالوان "> توفالوان </ option>
                            <option value = "الأوغندية "> الأوغندية </ option>
                            <option value = "الأوكرانية"> الأوكرانية </ option>
                            <option value = "أوروغواي "> أوروغواي </ option>
                            <option value = "أوزبكستان "> أوزبكستان </ option>
                            <option value = "فنزويلية "> فنزويلية </ option>
                            <option value = "الفيتنامية "> الفيتنامية </ option>
                            <option value = "الويلزية"> الويلزية </ option>
                            <option value = "يمني "> يمني </ option>
                            <option value = "الزامبية"> الزامبية </ option>
                            <option value = "زيمبابوي"> زيمبابوي </ option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Nationality_en">Nationality</label>
                    <select name="Nationality_en" class="form-select">
                        <option value="">-- select one --</option>
                        <option value="afghan">Afghan</option>
                        <option value="albanian">Albanian</option>
                        <option value="algerian">Algerian</option>
                        <option value="american">American</option>
                        <option value="andorran">Andorran</option>
                        <option value="angolan">Angolan</option>
                        <option value="antiguans">Antiguans</option>
                        <option value="argentinean">Argentinean</option>
                        <option value="armenian">Armenian</option>
                        <option value="australian">Australian</option>
                        <option value="austrian">Austrian</option>
                        <option value="azerbaijani">Azerbaijani</option>
                        <option value="bahamian">Bahamian</option>
                        <option value="bahraini">Bahraini</option>
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="barbadian">Barbadian</option>
                        <option value="barbudans">Barbudans</option>
                        <option value="batswana">Batswana</option>
                        <option value="belarusian">Belarusian</option>
                        <option value="belgian">Belgian</option>
                        <option value="belizean">Belizean</option>
                        <option value="beninese">Beninese</option>
                        <option value="bhutanese">Bhutanese</option>
                        <option value="bolivian">Bolivian</option>
                        <option value="bosnian">Bosnian</option>
                        <option value="brazilian">Brazilian</option>
                        <option value="british">British</option>
                        <option value="bruneian">Bruneian</option>
                        <option value="bulgarian">Bulgarian</option>
                        <option value="burkinabe">Burkinabe</option>
                        <option value="burmese">Burmese</option>
                        <option value="burundian">Burundian</option>
                        <option value="cambodian">Cambodian</option>
                        <option value="cameroonian">Cameroonian</option>
                        <option value="canadian">Canadian</option>
                        <option value="cape verdean">Cape Verdean</option>
                        <option value="central african">Central African</option>
                        <option value="chadian">Chadian</option>
                        <option value="chilean">Chilean</option>
                        <option value="chinese">Chinese</option>
                        <option value="colombian">Colombian</option>
                        <option value="comoran">Comoran</option>
                        <option value="congolese">Congolese</option>
                        <option value="costa rican">Costa Rican</option>
                        <option value="croatian">Croatian</option>
                        <option value="cuban">Cuban</option>
                        <option value="cypriot">Cypriot</option>
                        <option value="czech">Czech</option>
                        <option value="danish">Danish</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominican">Dominican</option>
                        <option value="dutch">Dutch</option>
                        <option value="east timorese">East Timorese</option>
                        <option value="ecuadorean">Ecuadorean</option>
                        <option value="egyptian">Egyptian</option>
                        <option value="emirian">Emirian</option>
                        <option value="equatorial guinean">Equatorial Guinean</option>
                        <option value="eritrean">Eritrean</option>
                        <option value="estonian">Estonian</option>
                        <option value="ethiopian">Ethiopian</option>
                        <option value="fijian">Fijian</option>
                        <option value="filipino">Filipino</option>
                        <option value="finnish">Finnish</option>
                        <option value="french">French</option>
                        <option value="gabonese">Gabonese</option>
                        <option value="gambian">Gambian</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="greek">Greek</option>
                        <option value="grenadian">Grenadian</option>
                        <option value="guatemalan">Guatemalan</option>
                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                        <option value="guinean">Guinean</option>
                        <option value="guyanese">Guyanese</option>
                        <option value="haitian">Haitian</option>
                        <option value="herzegovinian">Herzegovinian</option>
                        <option value="honduran">Honduran</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="icelander">Icelander</option>
                        <option value="indian">Indian</option>
                        <option value="indonesian">Indonesian</option>
                        <option value="iranian">Iranian</option>
                        <option value="iraqi">Iraqi</option>
                        <option value="irish">Irish</option>
                        <option value="israeli">Israeli</option>
                        <option value="italian">Italian</option>
                        <option value="ivorian">Ivorian</option>
                        <option value="jamaican">Jamaican</option>
                        <option value="japanese">Japanese</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="kazakhstani">Kazakhstani</option>
                        <option value="kenyan">Kenyan</option>
                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                        <option value="kuwaiti">Kuwaiti</option>
                        <option value="kyrgyz">Kyrgyz</option>
                        <option value="laotian">Laotian</option>
                        <option value="latvian">Latvian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="liberian">Liberian</option>
                        <option value="libyan">Libyan</option>
                        <option value="liechtensteiner">Liechtensteiner</option>
                        <option value="lithuanian">Lithuanian</option>
                        <option value="luxembourger">Luxembourger</option>
                        <option value="macedonian">Macedonian</option>
                        <option value="malagasy">Malagasy</option>
                        <option value="malawian">Malawian</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="maldivan">Maldivan</option>
                        <option value="malian">Malian</option>
                        <option value="maltese">Maltese</option>
                        <option value="marshallese">Marshallese</option>
                        <option value="mauritanian">Mauritanian</option>
                        <option value="mauritian">Mauritian</option>
                        <option value="mexican">Mexican</option>
                        <option value="micronesian">Micronesian</option>
                        <option value="moldovan">Moldovan</option>
                        <option value="monacan">Monacan</option>
                        <option value="mongolian">Mongolian</option>
                        <option value="moroccan">Moroccan</option>
                        <option value="mosotho">Mosotho</option>
                        <option value="motswana">Motswana</option>
                        <option value="mozambican">Mozambican</option>
                        <option value="namibian">Namibian</option>
                        <option value="nauruan">Nauruan</option>
                        <option value="nepalese">Nepalese</option>
                        <option value="new zealander">New Zealander</option>
                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                        <option value="nicaraguan">Nicaraguan</option>
                        <option value="nigerien">Nigerien</option>
                        <option value="north korean">North Korean</option>
                        <option value="northern irish">Northern Irish</option>
                        <option value="norwegian">Norwegian</option>
                        <option value="omani">Omani</option>
                        <option value="pakistani">Pakistani</option>
                        <option value="palauan">Palauan</option>
                        <option value="panamanian">Panamanian</option>
                        <option value="papua new guinean">Papua New Guinean</option>
                        <option value="paraguayan">Paraguayan</option>
                        <option value="peruvian">Peruvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="qatari">Qatari</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="rwandan">Rwandan</option>
                        <option value="saint lucian">Saint Lucian</option>
                        <option value="salvadoran">Salvadoran</option>
                        <option value="samoan">Samoan</option>
                        <option value="san marinese">San Marinese</option>
                        <option value="sao tomean">Sao Tomean</option>
                        <option value="saudi">Saudi</option>
                        <option value="scottish">Scottish</option>
                        <option value="senegalese">Senegalese</option>
                        <option value="serbian">Serbian</option>
                        <option value="seychellois">Seychellois</option>
                        <option value="sierra leonean">Sierra Leonean</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="slovakian">Slovakian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="solomon islander">Solomon Islander</option>
                        <option value="somali">Somali</option>
                        <option value="south african">South African</option>
                        <option value="south korean">South Korean</option>
                        <option value="spanish">Spanish</option>
                        <option value="sri lankan">Sri Lankan</option>
                        <option value="sudanese">Sudanese</option>
                        <option value="surinamer">Surinamer</option>
                        <option value="swazi">Swazi</option>
                        <option value="swedish">Swedish</option>
                        <option value="swiss">Swiss</option>
                        <option value="syrian">Syrian</option>
                        <option value="taiwanese">Taiwanese</option>
                        <option value="tajik">Tajik</option>
                        <option value="tanzanian">Tanzanian</option>
                        <option value="thai">Thai</option>
                        <option value="togolese">Togolese</option>
                        <option value="tongan">Tongan</option>
                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                        <option value="tunisian">Tunisian</option>
                        <option value="turkish">Turkish</option>
                        <option value="tuvaluan">Tuvaluan</option>
                        <option value="ugandan">Ugandan</option>
                        <option value="ukrainian">Ukrainian</option>
                        <option value="uruguayan">Uruguayan</option>
                        <option value="uzbekistani">Uzbekistani</option>
                        <option value="venezuelan">Venezuelan</option>
                        <option value="vietnamese">Vietnamese</option>
                        <option value="welsh">Welsh</option>
                        <option value="yemenite">Yemenite</option>
                        <option value="zambian">Zambian</option>
                        <option value="zimbabwean">Zimbabwean</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date_hirement">تاريخ التعيين</label>
                    <input type="date" class="form-control" id='date_hirement' name='date_hirement'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date_certified">تاريخ الشهادة</label>
                    <input type="date" class="form-control" id='date_certified' name='date_certified'>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="public_specific_ar">التخصص العام</label>
                    <input type="text" class="form-control" id='public_specific_ar' name='public_specific_ar'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="public_specific_en">public_specific</label>
                    <input type="text" class="form-control" id='public_specific_en' name='public_specific_en'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="private_specific_ar">التخصص الدقيق</label>
                    <input type="text" class="form-control" id='private_specific_ar' name='private_specific_ar'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="private_specific_en">private_specific</label>
                    <input type="text" class="form-control" id='private_specific_en' name='private_specific_en'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="darcode">darcode</label>
                    <input type="text" class="form-control" id='darcode' name='darcode'>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">رقم التليفون</label>
                    <input type="text" class="form-control" id='phone' name='phone'>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mag_certified_ar">الجامعه الحاصل منها علي المجاستير</label>
                    <input type="text" class="form-control" id='mag_certified_ar' name='mag_certified_ar'>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mag_certified_en">university of mag_certified</label>
                    <input type="text" class="form-control" id='mag_certified_en' name='mag_certified_en'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="bac_certified_ar">الجامعه الحاصل منها علي الدكتوراه</label>
                    <input type="text" class="form-control" id='bac_certified_ar' name='bac_certified_ar'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="bac_certified_en">university of bac_certified</label>
                    <input type="text" class="form-control" id='bac_certified_en' name='bac_certified_en'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="country_certified_ar">اختار الدوله للشهاده</label>
                    <select name="country_certified_ar" class="form-select">
                        <option value="0">اختار الدوله للشهاده</option>
                        <option value="آروبا">آروبا</option>
                        <option value="أذربيجان">أذربيجان</option>
                        <option value="أرمينيا">أرمينيا</option>
                        <option value="أسبانيا ">أسبانيا</option>
                        <option value="أستراليا">أستراليا</option>
                        <option value="أفغانستان">أفغانستان</option>
                        <option value="ألبانيا">ألبانيا</option>
                        <option value="ألمانيا">ألمانيا</option>
                        <option value="أنتيجوا وبربودا">أنتيجوا وبربودا</option>
                        <option value="أنجولا">أنجولا</option>
                        <option value="أنجويلا">أنجويلا</option>
                        <option value="أندورا">أندورا</option>
                        <option value="أورجواي">أورجواي</option>
                        <option value="أوزبكستان">أوزبكستان</option>
                        <option value="أوغندا">أوغندا</option>
                        <option value="أوكرانيا">أوكرانيا</option>
                        <option value="أيرلندا">أيرلندا</option>
                        <option value="أيسلندا">أيسلندا</option>
                        <option value="اثيوبيا">اثيوبيا</option>
                        <option value="اريتريا">اريتريا</option>
                        <option value="استونيا">استونيا</option>
                        <option value="اسرائيل">اسرائيل</option>
                        <option value="الأرجنتين">الأرجنتين</option>
                        <option value="الأردن">الأردن</option>
                        <option value="الاكوادور">الاكوادور</option>
                        <option value="لامارات العربية المتحدة">الامارات العربية المتحدة</option>
                        <option value="الباهاما">الباهاما</option>
                        <option value="البحرين">البحرين</option>
                        <option value="البرازيل">البرازيل</option>
                        <option value="البرتغال">البرتغال</option>
                        <option value="البوسنةوالهرسك">البوسنة والهرسك</option>
                        <option value="الجابون">الجابون</option>
                        <option value="الجبل الأسود">الجبل الأسود</option>
                        <option value="الجزائر">الجزائر</option>
                        <option value="الدانمرك">الدانمرك</option>
                        <option value="الرأس الأخضر">الرأس الأخضر</option>
                        <option value="السلفادور">السلفادور</option>
                        <option value="السنغال">السنغال</option>
                        <option value="السودان ">السودان</option>
                        <option value="السويد">السويد</option>
                        <option value="الصحراء الغربية">الصحراء الغربية</option>
                        <option value="الصومال">الصومال</option>
                        <option value="الصين">الصين</option>
                        <option value="العراق">العراق</option>
                        <option value="الفاتيكان">الفاتيكان</option>
                        <option value="الفيلبين">الفيلبين</option>
                        <option value="القطب الجنوبي">القطب الجنوبي</option>
                        <option value="الكاميرون">الكاميرون</option>
                        <option value="الكونغو - برازافيل">الكونغو - برازافيل</option>
                        <option value="الكويت">الكويت</option>
                        <option value="المجر">المجر</option>
                        <option value="المحيط الهندي البريطاني">المحيط الهندي البريطاني</option>
                        <option value="المغرب">المغرب</option>
                        <option value="المقاطعات الجنوبية الفرنسية">المقاطعات الجنوبية الفرنسية</option>
                        <option value="المكسيك">المكسيك</option>
                        <option value="المملكة العربية السعودية">المملكة العربية السعودية</option>
                        <option value="المملكة المتحدة">المملكة المتحدة</option>
                        <option value="النرويج">النرويج</option>
                        <option value="النمسا">النمسا</option>
                        <option value="النيجر">النيجر</option>
                        <option value="الهند">الهند</option>
                        <option value="الولايات المتحدة الأمريكية">الولايات المتحدة الأمريكية</option>
                        <option value="اليابان">اليابان</option>
                        <option value="اليمن">اليمن</option>
                        <option value="اليونان">اليونان</option>
                        <option value="اندونيسيا">اندونيسيا</option>
                        <option value="ايران">ايران</option>
                        <option value="ايطاليا">ايطاليا</option>
                        <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                        <option value="باراجواي">باراجواي</option>
                        <option value="باكستان">باكستان</option>
                        <option value="بالاو">بالاو</option>
                        <option value="بتسوانا">بتسوانا</option>
                        <option value="بتكايرن">بتكايرن</option>
                        <option value="بربادوس">بربادوس</option>
                        <option value="برمودا ">برمودا</option>
                        <option value="بروناي">بروناي</option>
                        <option value="بلجيكا">بلجيكا</option>
                        <option value="بلغاريا">بلغاريا</option>
                        <option value="بليز">بليز</option>
                        <option value="بنجلاديش">بنجلاديش</option>
                        <option value="بنما">بنما</option>
                        <option value="بنين">بنين</option>
                        <option value="بوتان">بوتان</option>
                        <option value="بورتوريكو">بورتوريكو</option>
                        <option value="بوركينا فاسو">بوركينا فاسو</option>
                        <option value="بوروندي">بوروندي</option>
                        <option value="بولندا">بولندا</option>
                        <option value="بوليفيا">بوليفيا</option>
                        <option value="بولينيزيا الفرنسية">بولينيزيا الفرنسية</option>
                        <option value="بيرو">بيرو</option>
                        <option value="تانزانيا">تانزانيا</option>
                        <option value="تايلند">تايلند</option>
                        <option value="تايوان">تايوان</option>
                        <option value="تركمانستان">تركمانستان</option>
                        <option value="تركيا">تركيا</option>
                        <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                        <option value="تشاد">تشاد</option>
                        <option value="توجو">توجو</option>
                        <option value="توفالو">توفالو</option>
                        <option value="توكيلو">توكيلو</option>
                        <option value="تونجا">تونجا</option>
                        <option value="تونس">تونس</option>
                        <option value="تيمور الشرقية">تيمور الشرقية</option>
                        <option value="جامايكا">جامايكا</option>
                        <option value="طارق">جبل طارق</option>
                        <option value="جرينادا">جرينادا</option>
                        <option value="جرينلاند">جرينلاند</option>
                        <option value="جزر اولان">جزر أولان</option>
                        <option value="جزر الأنتيل الهولندية">جزر الأنتيل الهولندية</option>
                        <option value="جزر الترك وجايكوس">جزر الترك وجايكوس</option>
                        <option value="جزر القمر">جزر القمر</option>
                        <option value="جزر الكايمن">جزر الكايمن</option>
                        <option value="جزر المارشال">جزر المارشال</option>
                        <option value="جزر الملديف">جزر الملديف</option>
                        <option value="جزر الولايات المتحدة البعيدة الصغيرة">جزر الولايات المتحدة البعيدة الصغيرة</option>
                        <option value="جزر سليمان">جزر سليمان</option>
                        <option value="جزر فارو">جزر فارو</option>
                        <option value="جزر فرجين الأمريكية">جزر فرجين الأمريكية</option>
                        <option value="جزر فرجين البريطانية">جزر فرجين البريطانية</option>
                        <option value="جزر فوكلاند">جزر فوكلاند</option>
                        <option value="جزر كوك">جزر كوك</option>
                        <option value="جزر كوكوس">جزر كوكوس</option>
                        <option value="جزر ماريانا الشمالية">جزر ماريانا الشمالية</option>
                        <option value="جزر والس وفوتونا">جزر والس وفوتونا</option>
                        <option value="جزيرة الكريسماس">جزيرة الكريسماس</option>
                        <option value="جزيرة بوفيه">جزيرة بوفيه</option>
                        <option value="جزيرة مان">جزيرة مان</option>
                        <option value="جزيرة نورفوك">جزيرة نورفوك</option>
                        <option value="جزيرة هيرد وماكدونالد">جزيرة هيرد وماكدونالد</option>
                        <option value="جمهورية افريقيا الوسطى">جمهورية افريقيا الوسطى</option>
                        <option value="جمهورية التشيك">جمهورية التشيك</option>
                        <option value="جمهورية الدومينيك">جمهورية الدومينيك</option>
                        <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                        <option value="جمهورية جنوب افريقيا">جمهورية جنوب افريقيا</option>
                        <option value="جواتيمالا">جواتيمالا</option>
                        <option value="جوادلوب">جوادلوب</option>
                        <option value="جوام">جوام</option>
                        <option value="جورجيا">جورجيا</option>
                        <option value="جورجيا الجنوبية وجزر ساندويتش الجنوبية">جورجيا الجنوبية وجزر ساندويتش الجنوبية</option>
                        <option value="جيبوتي">جيبوتي</option>
                        <option value="جيرسي">جيرسي</option>
                        <option value="دومينيكا">دومينيكا</option>
                        <option value="رواندا">رواندا</option>
                        <option value="روسيا">روسيا</option>
                        <option value="روسيا البيضاء">روسيا البيضاء</option>
                        <option value="رومانيا">رومانيا</option>
                        <option value="روينيون">روينيون</option>
                        <option value="زامبيا">زامبيا</option>
                        <option value="زيمبابوي">زيمبابوي</option>
                        <option value="ساحل العاج">ساحل العاج</option>
                        <option value="ساموا">ساموا</option>
                        <option value="ساموا الأمريكية">ساموا الأمريكية</option>
                        <option value="سان مارينو">سان مارينو</option>
                        <option value="سانت بيير وميكولون">سانت بيير وميكولون</option>
                        <option value="سانت فنسنت وغرنادين">سانت فنسنت وغرنادين</option>
                        <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                        <option value="سانت لوسيا">سانت لوسيا</option>
                        <option value="سانت مارتين">سانت مارتين</option>
                        <option value="سانت هيلنا">سانت هيلنا</option>
                        <option value="ساو تومي وبرينسيبي">ساو تومي وبرينسيبي</option>
                        <option value="سريلانكا">سريلانكا</option>
                        <option value="سفالبارد وجان مايان">سفالبارد وجان مايان</option>
                        <option value="سلوفاكيا">سلوفاكيا</option>
                        <option value="سلوفينيا">سلوفينيا</option>
                        <option value="سنغافورة">سنغافورة</option>
                        <option value="سوازيلاند">سوازيلاند</option>
                        <option value="سوريا">سوريا</option>
                        <option value="سورينام">سورينام</option>
                        <option value="سويسرا">سويسرا</option>
                        <option value="سيراليون">سيراليون</option>
                        <option value="سيشل">سيشل</option>
                        <option value="شيلي">شيلي</option>
                        <option value="صربيا">صربيا</option>
                        <option value="صربيا والجبل الأسود">صربيا والجبل الأسود</option>
                        <option value="طاجكستان">طاجكستان</option>
                        <option value="عمان">عمان</option>
                        <option value="غامبيا">غامبيا</option>
                        <option value="غانا">غانا</option>
                        <option value="غويانا">غويانا</option>
                        <option value="غيانا">غيانا</option>
                        <option value="غينيا">غينيا</option>
                        <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                        <option value="غينيا بيساو">غينيا بيساو</option>
                        <option value="فانواتو">فانواتو</option>
                        <option value="فرنسا">فرنسا</option>
                        <option value="فلسطين">فلسطين</option>
                        <option value="فنزويلا">فنزويلا</option>
                        <option value="فنلندا">فنلندا</option>
                        <option value="فيتنام">فيتنام</option>
                        <option value="فيجي">فيجي</option>
                        <option value="قبرص">قبرص</option>
                        <option value="قرغيزستان">قرغيزستان</option>
                        <option value="قطر">قطر</option>
                        <option value="كازاخستان">كازاخستان</option>
                        <option value="كاليدونيا الجديدة">كاليدونيا الجديدة</option>
                        <option value="كرواتيا">كرواتيا</option>
                        <option value="كمبوديا">كمبوديا</option>
                        <option value="كندا">كندا</option>
                        <option value="كوبا">كوبا</option>
                        <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                        <option value="كوريا الشمالية">كوريا الشمالية</option>
                        <option value="كوستاريكا">كوستاريكا</option>
                        <option value="كولومبيا">كولومبيا</option>
                        <option value="كيريباتي">كيريباتي</option>
                        <option value="كينيا">كينيا</option>
                        <option value="لاتفيا">لاتفيا</option>
                        <option value="لاوس">لاوس</option>
                        <option value="لبنان">لبنان</option>
                        <option value="لوكسمبورج">لوكسمبورج</option>
                        <option value="ليبيا">ليبيا</option>
                        <option value="ليبيريا">ليبيريا</option>
                        <option value="ليتوانيا">ليتوانيا</option>
                        <option value="ليختنشتاين">ليختنشتاين</option>
                        <option value="ليسوتو">ليسوتو</option>
                        <option value="مارتينيك">مارتينيك</option>
                        <option value="ماكاو الصينية">ماكاو الصينية</option>
                        <option value="مالطا">مالطا</option>
                        <option value="مالي">مالي</option>
                        <option value="ماليزيا">ماليزيا</option>
                        <option value="مايوت">مايوت</option>
                        <option value="مدغشقر">مدغشقر</option>
                        <option value="مصر">مصر</option>
                        <option value="مقدونيا">مقدونيا</option>
                        <option value="ملاوي">ملاوي</option>
                        <option value="منطقة غير معرفة">منطقة غير معرفة</option>
                        <option value="منغوليا">منغوليا</option>
                        <option value="موريتانيا">موريتانيا</option>
                        <option value="موريشيوس">موريشيوس</option>
                        <option value="موزمبيق">موزمبيق</option>
                        <option value="مولدافيا">مولدافيا</option>
                        <option value="موناكو">موناكو</option>
                        <option value="مونتسرات">مونتسرات</option>
                        <option value="ميانمار">ميانمار</option>
                        <option value="ميكرونيزيا">ميكرونيزيا</option>
                        <option value="ناميبيا">ناميبيا</option>
                        <option value="نورو">نورو</option>
                        <option value="نيبال">نيبال</option>
                        <option value="نيجيريا">نيجيريا</option>
                        <option value="نيكاراجوا">نيكاراجوا</option>
                        <option value="نيوزيلاندا">نيوزيلاندا</option>
                        <option value="نيوي">نيوي</option>
                        <option value="هايتي">هايتي</option>
                        <option value="هندوراس">هندوراس</option>
                        <option value="هولندا">هولندا</option>
                        <option value="هونج كونج الصينية">هونج كونج الصينية</option>
                    </select>
                </div>
            </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country_certified_en">country_certified </label>
                <select id="country_en" name="country_certified_en" class="form-select"
                <option value="0">Select country certified</option>
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bonaire">Bonaire</option>
                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Canary Islands">Canary Islands</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Channel Islands">Channel Islands</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos Island">Cocos Island</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote DIvoire">Cote DIvoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaco">Curacao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands">Falkland Islands</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Ter">French Southern Ter</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Great Britain">Great Britain</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="India">India</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea Sout">Korea South</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Midway Islands">Midway Islands</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nambia">Nambia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherland Antilles">Netherland Antilles</option>
                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                    <option value="Nevis">Nevis</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau Island">Palau Island</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Phillipines">Philippines</option>
                    <option value="Pitcairn Island">Pitcairn Island</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                    <option value="Republic of Serbia">Republic of Serbia</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="St Barthelemy">St Barthelemy</option>
                    <option value="St Eustatius">St Eustatius</option>
                    <option value="St Helena">St Helena</option>
                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                    <option value="St Lucia">St Lucia</option>
                    <option value="St Maarten">St Maarten</option>
                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                    <option value="Saipan">Saipan</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa American">Samoa American</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Tahiti">Tahiti</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Erimates">United Arab Emirates</option>
                    <option value="United States of America">United States of America</option>
                    <option value="Uraguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City State">Vatican City State</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                    <option value="Wake Island">Wake Island</option>
                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zaire">Zaire</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="notes_en">ملاحظات</label>
                <input type="text" class="form-control" id='notes_ar' name='notes_ar'>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="notes_en">notes</label>
                <input type="text" class="form-control" id='notes_en' name='notes_en'>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">التفاصيل</label>
                <input type="text" class="form-control" id='details_ar' name='details_ar'>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">details</label>
                <input type="text" class="form-control" id='details_en' name='details_en'>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mother_name_ar">اسم الام</label>
                <input type="text" class="form-control" id='mother_name_ar' name='mother_name_ar'>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mother_name_en">mother_name</label>
                <input type="text" class="form-control" id='mother_name_en' name='mother_name_en'>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="type_hirement_ar">نوع التعيين</label>
                <input type="text" class="form-control" id='type_hirement_ar' name='type_hirement_ar'>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="type_hirement_en">type_hirement</label>
                <input type="text" class="form-control" id='type_hirement_en' name='type_hirement_en'>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="local">الدرجه</label>
                <input type="text" class="form-control" id='grade_ar' name='grade_ar'>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="comrades">Grade</label>
                <input type="text" class="form-control" id='grade_en' name='grade_en'>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="birthday">تاريخ الميلاد</label>
                <input type="date" class="form-control" id='birthday' name='birthday'>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">رقم السري</label>
                <input type="password" class="form-control" id='password' name='password'>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="local">local</label>
                <input type="text" class="form-control" id='local' name='local'>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="comrades">comrades</label>
                <input type="text" class="form-control" id='comrades' name='comrades'>
            </div>
        </div>
     <center>   <input type="submit" class="btn btn-primary"  />
     </center></form>
    </div>
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
