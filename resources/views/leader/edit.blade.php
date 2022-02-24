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
        <form action="/leader/{{ $leader->id }}"  enctype="multipart/form-data" method="POST">
            @csrf
            <img src="/{{ $leader->image }}" width="100" height="100" alt="image">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">الاسم</label>
                    <input type="text" accept="image/*" class="form-control" name='name_ar' id='name' value="{{ $leader->name_ar}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name='name_en' id='name' value="{{ $leader->name_en }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id='image' name='image'>
                </div>



            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="university_certified_ar">الجامعه الحاصل منها علي الشهاده</label>
                    <input type="text" class="form-control" id='university_certified_ar'
                        name='university_certified_ar' value="{{$leader->university_certified_ar  }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="university_certified_en">university_certified</label>
                    <input type="text" class="form-control" id='university_certified_en'
                        name='university_certified_en' value="{{ $leader->university_certified_en }}">
                </div>

            </div>

            <div class="form-group col-md-6">
                <label for="facutly_certified_ar">الكلية الحاصل منها علي الشهاده </label>
                <input type="text" class="form-control" id='facutly_certified_ar' name='facutly_certified_ar' value="{{ $leader->facutly_certified_ar}}">
            </div>
            <div class="form-group col-md-6">
                <label for="facutly_certified_en">facutly_certified</label>
                <input type="text" class="form-control" id='facutly_certified_en' name='facutly_certified_en'  value="{{  $leader->facutly_certified_en}}">
            </div>

            <div class="form-group col-md-6">
                <label for="certified_ar">الشهاده</label>
                <input type="text" class="form-control" id='certified_ar' name='certified_ar'  value="{{$leader->certified_ar  }}">
            </div>
            <div class="form-group col-md-6">
                <label for="certified_">certified</label>
                <input type="text" class="form-control" id='certified_en' name='certified_en' value="{{$leader->certified_en  }}">
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="position_ar">المنصب الحالي</label>
                    <input type="text" class="form-control" id='position_ar' name='position_ar' value="{{$leader->position_ar  }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="posiotion_en">position</label>
                    <input type="text" class="form-control" id='posiotion_en' name='posiotion_en'  value="{{ $leader->posiotion_en }}">
                </div>
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
                    <input type="text" class="form-control" id='public_specific_ar' name='public_specific_ar'  value="{{ $leader->public_specific_ar}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="public_specific_en">public_specific</label>
                    <input type="text" class="form-control" id='public_specific_en' name='public_specific_en'  value="{{ $leader->public_specific_en }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="private_specific_ar">التخصص الدقيق</label>
                    <input type="text" class="form-control" id='private_specific_ar' name='private_specific_ar' value="{{$leader->private_specific_ar }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="private_specific_en">private_specific</label>
                    <input type="text" class="form-control" id='private_specific_en' name='private_specific_en' value="{{  $leader->private_specific_en }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="darcode">darcode</label>
                    <input type="text" class="form-control" id='darcode' name='darcode' value="{{$leader->darcode }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">رقم التليفون</label>
                    <input type="text" class="form-control" id='phone' name='phone' value="{{$leader->phone }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mag_certified_ar">الجامعه الحاصل منها علي المجاستير</label>
                    <input type="text" class="form-control" id='mag_certified_ar' name='mag_certified_ar'value="{{$leader->mag_certified_ar }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mag_certified_en">university of mag_certified</label>
                    <input type="text" class="form-control" id='mag_certified_en' name='mag_certified_en' value="{{$leader->mag_certified_en }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="bac_certified_ar">الجامعه الحاصل منها علي الدكتوراه</label>
                    <input type="text" class="form-control" id='bac_certified_ar' name='bac_certified_ar' value="{{$leader->bac_certified_ar }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="bac_certified_en">university of bac_certified</label>
                    <input type="text" class="form-control" id='bac_certified_en' name='bac_certified_en' value="{{ $leader->bac_certified_en }}">
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
                <input type="text" class="form-control" id='notes_ar' name='notes_ar' value="{{$leader->notes_ar }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="notes_en">notes</label>
                <input type="text" class="form-control" id='notes_en' name='notes_en' value="{{$leader->notes_en }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">التفاصيل</label>
                <input type="text" class="form-control" id='details_ar' name='details_ar' value="{{$leader->details_ar }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="details_en">details</label>
                <input type="text" class="form-control" id='details_en' name='details_en' value="{{ $leader->details_en  }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mother_name_ar">اسم الام</label>
                <input type="text" class="form-control" id='mother_name_ar' name='mother_name_ar' value="{{ $leader->mother_name_ar }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mother_name_en">mother_name</label>
                <input type="text" class="form-control" id='mother_name_en' name='mother_name_en' value="{{ $leader->mother_name_en }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="type_hirement_ar">نوع التعيين</label>
                <input type="text" class="form-control" id='type_hirement_ar' name='type_hirement_ar' value= "{{$leader->type_hirement_ar }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="type_hirement_en">type_hirement</label>
                <input type="text" class="form-control" id='type_hirement_en' name='type_hirement_en' value="{{ $leader->type_hirement_en }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="local">الدرجه</label>
                <input type="text" class="form-control" id='grade_ar' name='grade_ar' value="{{$leader->grade_ar}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="comrades">Grade</label>
                <input type="text" class="form-control" id='grade_en' name='grade_en' value="{{ $leader->grade_en }}">
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
                <label for="local">local</label>
                <input type="text" class="form-control" id='local' name='local' value="{{ $leader->local }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="comrades">comrades</label>
                <input type="text" class="form-control" id='comrades' name='comrades' value="{{$leader->comrades}}">
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
