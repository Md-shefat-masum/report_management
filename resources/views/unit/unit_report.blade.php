<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Report || unit</title>

        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('css/unit/default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/unit/unit_report.css') }}">

    </head>
    <body>
        <section id="heading" class="mt-3">
            <div class="report_heading position-relative mb-1">
                <h3 class="text-center fs-6">বিসমিল্লাহির রাহমানির রাহীম</h3>
                <h1 class="text-center mb-2 fs-4">ইউনিট সংগঠনের মাসিক রিপোর্ট</h1>
                <div class="org_gender position-absolute">
                    <p>মহিলা</p>
                </div>
            </div>
            <div class="unit_info">
                <div class="line d-flex flex-wrap mb-1">
                    <p class="w-75">মাস: </p>
                    <p class="w-25">সন:</p>
                </div>
                <div class="line d-flex flex-wrap justify-content-between mb-1">
                    <p>ইউনিটের নাম: </p>
                    <p>ওয়ার্ড নং ও নাম:</p>
                    <p class="w-25">উপজেলা/থানা:</p>
                </div>
                <div class="line d-flex flex-wrap justify-content-between ">
                    <p>ইউনিট সভানেত্রীর নাম: </p>
                    <p class="width-30">ইউনিটের ধরন:</p>
                </div>
            </div>
        </section>

        <section id="report">
                <div class="dawat mt-1">
                    <h1 class="font-18">দাওয়াত ও তাবলিগ :</h1>
                    <div class="jonoshadharon d-flex flex-wrap justify-content-between mb-2">
                        <p class="fw-bold w-75">ক) জনসাধারণের মাঝে সর্বমোট দাওয়াত প্রদান সংখ্যা* :</p>
                        <p class="fw-bold w-25">টার্গেট:</p>
                        <p class="mt-1 ps-3 font-13">* দাওয়াত ও তাবলিগের 'ক' এর অধীনে ক্রমিক ১ - ৪নং পর্যন্ত দাওয়াত প্রদান সংখ্যা যোগ করে এখানে বসাতে হবে ।</p>
                    </div>
                    <div class="group_dawat mb-2">
                        <h4 class="fs-6">১. নিয়মিত গ্রুপভিত্তিক দাওয়াত :</h4>
                        <table class="text-center  ">
                            <thead>
                                <tr>
                                    <th >কতটি গ্রুপ বের হয়েছে</th>
                                    <th >অংশগ্রহণকারীর সংখ্যা </th>
                                    <th >কতজনের নিকট দাওয়াত পৌঁছানো হয়েছে</th>
                                    <th >কতজন সহযোগী সদস্য হয়েছেন</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >{{$dawat1->how_many_groups_are_out?? ""}}</td>
                                    <td >{{$dawat1->number_of_participants?? ""}}</td>
                                    <td >{{$dawat1->how_many_have_been_invited?? ""}}</td>
                                    <td >{{$dawat1->how_many_associate_members_created?? ""}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="personal_dawat mb-2">
                        <h4 class="fs-6">২. ব্যক্তিগত ও টার্গেটভিত্তিক দাওয়াত:</h4>
                        <table class="text-center  ">
                            <thead>
                                <tr>
                                    <th >বিবরণ</th>
                                    <th class="width-15">সদস্য (রুকন)</th>
                                    <th class="width-15">কর্মী</th>
                                    <th >বিবরণ</th>
                                    <th class="width-15">সংখ্যা</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-start px-2">মোট জনশক্তি সংখ্যা</td>
                                    <td >{{$dawat2->total_rokon?? ""}}</td>
                                    <td >{{$dawat2->total_worker?? ""}}</td>
                                    <td class="text-start px-2">কতজনের নিকট দাওয়াত পৌঁছানো হয়েছে</td>
                                    <td >{{$dawat2->how_many_have_been_invited?? ""}}</td>
                                </tr>
                                <tr>
                                    <td class="text-start px-2">কতজন ব্যক্তিগতভাবে দাওয়াতি কাজ করেছেন</td>
                                    <td >{{$dawat2->how_many_were_give_dawat_rokon?? ""}}</td>
                                    <td >{{$dawat2->how_many_were_give_dawat_worker?? ""}}</td>
                                    <td class="text-start px-2">কতজন সহযোগী সদস্য হয়েছেন</td>
                                    <td >{{$dawat2->how_many_associate_members_created?? ""}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="shadharon_shova mb-2">
                        <h4 class="fs-6">৩. সাধারণ সভা/দাওয়াতি সভা ও অন্যান্য কার্যক্রমের মাধ্যমে দাওয়াত :</h4>
                        <table class="text-center  table_layout_fixed">
                            <thead>
                                <tr>
                                    <th >মোট কতজনকে দাওয়াত প্রদান করা হয়েছে</th>
                                    <th >মোট কতজন সহযোগী সদস্য হয়েছেন</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >{{$dawat3->how_many_were_give_dawat?? ""}}</td>
                                    <td >{{$dawat3->how_many_associate_members_created?? ""}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="gonoshongjog mb-2">
                        <h4 class="fs-6">৪. গণসংযোগ ও দাওয়াতি অভিযান পালন*:</h4>
                        <table class="text-center  ">
                            <thead>
                                <tr>
                                    <th class="width">বিবরণ</th>
                                    <th class="width-15">মোট গ্রুপ সংখ্যা</th>
                                    <th class="width-15">অংশগ্রহণকারীর সংখ্যা</th>
                                    <th class="width-20">কতজনের নিকট দাওয়াত পৌঁছানো হয়েছে</th>
                                    <th class="width-15">কতজন সহযোগী সদস্য হয়েছেন</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-start px-2">গণসংযোগ দশক / পক্ষ</td>
                                    <td >{{$dawat4->total_gono_songjog_group?? ""}}</td>
                                    <td >{{$dawat4->total_attended?? ""}}</td>
                                    <td >{{$dawat4->how_many_have_been_invited?? ""}}</td>
                                    <td >{{$dawat4->how_many_associate_members_created?? ""}}</td>
                                </tr>
                                <tr>
                                    <td class="text-start px-2">জেলা/মহা: ঘোষিত গণসংযোগ/দাওয়াতি অভিযান</td>
                                    <td >{{$dawat4->jela_mohanogor_declared_gonosonjog_group?? ""}}</td>
                                    <td >{{$dawat4->jela_mohanogor_declared_gonosonjog_attended?? ""}}</td>
                                    <td >{{$dawat4->jela_mohanogor_declared_gonosonjog_invited?? ""}}</td>
                                    <td >{{$dawat4->jela_mohanogor_declared_gonosonjog_associated_created?? ""}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>* গণসংযোগ অভিযান পালনের সময় গ্রুপ সংখ্যা, ব্যক্তিগত ও গ্রুপভিত্তিক সহযোগী সদস্য বৃদ্ধি সংখ্যা শুধুমাত্র এই ছকেই বসাতে হবে।</p>
                    </div>
                </div>
                <h1 class="font-18">খ) বিভাগ ভিত্তিক তথ্য :</h1>
                <div class="bivag">
                    <div class="talimul_quran mb-2">
                        <h4 class="fs-6">১. তালিমুল কুরআনের মাধ্যমে দাওয়াত</h4>
                        <table class="text-center  mb-1">
                            <thead>
                                <tr>
                                    <th class="width-40">ব্যক্তিগত উদ্যোগ</th>
                                    <th class="">সদস্য (রুকন)</th>
                                    <th class="width-15">কর্মী</th>
                                    <th class="width-20">মোট</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-start px-2">কতজন কুরআন শিক্ষা প্রদান করেছেন</td>
                                    <td >{{$department1->teacher_rokon?? ""}}</td>
                                    <td >{{$department1->teacher_worker?? ""}}</td>
                                    <td >{{$department1->teacher_rokon + $department1->teacher_worker ?? ""}}</td>
                                </tr>
                                <tr>
                                    <td class="text-start px-2">কতজনকে কুরআন শিক্ষা প্রদান করা হয়েছে</td>
                                    <td >{{$department1->student_rokon?? ""}}</td>
                                    <td >{{$department1->student_worker?? ""}}</td>
                                    <td >{{$department1->student_rokon + $department1->student_worker ?? ""}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="text-center table_layout_fixed">
                            <thead>
                                <tr>
                                    <th class="">কতজন সহীহ তিলাওয়াত শিখেছেন</th>
                                    <th class="">কতজনের নিকট দাওয়াত পৌঁছানো হয়েছে</th>
                                    <th class="">কতজন সহযোগী সদস্য হয়েছেন</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >{{$department1->how_much_learned_quran?? ""}}</td>
                                    <td >{{$department1->how_much_invited?? ""}}</td>
                                    <td >{{$department1->how_much_been_associated?? ""}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="job_holder">
                        <h4 class="fs-6">২. বিভিন্ন শ্রেণি-পেশার মানুষের মাঝে দাওয়াত</h4>
                        <table class="text-center  mb-1">
                            <thead>
                                <tr>
                                    <th class="">শ্রেণি-পেশার বিবরণ</th>
                                    <th class="">কতজনের মাঝে দাওয়াত পৌঁছানো হয়েছে</th>
                                    <th class="">কতজন সহযোগী সদস্য হয়েছেন</th>
                                    <th class="width-20">টার্গেট</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-start px-2">রাজনৈতিক ও বিশিষ্ট ব্যক্তিবর্গ</td>
                                    <td >{{$department4->political_and_special_invited?? ""}}</td>
                                    <td >{{$department4->political_and_special_been_associated?? ""}}</td>
                                    <td >{{$department4->political_and_special_target?? ""}}</td>
                                </tr>
                                <tr>
                                    <td class="text-start px-2">প্রান্তিক জনগোষ্ঠী (অতি দরিদ্র)</td>
                                    <td >{{$department4->prantik_jonogosti_invited?? ""}}</td>
                                    <td >{{$department4->prantik_jonogosti_been_associated?? ""}}</td>
                                    <td >{{$department4->prantik_jonogosti_target?? ""}}</td>
                                </tr>
                                <tr>
                                    <td class="text-start px-2">ভিন্নধর্মাবলম্বী</td>
                                    <td >{{$department4->vinno_dormalombi_invited?? ""}}</td>
                                    <td >{{$department4->vinno_dormalombi_been_associated?? ""}}</td>
                                    <td >{{$department4->vinno_dormalombi_target?? ""}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="poribar mb-2">
                        <h4 class="fs-6">৩. পরিবারভিত্তিক দাওয়াত:</h4>
                        <table class="text-center mb-1 table_layout_fixed">
                            <thead>
                                <tr>
                                    <th class="">দাওয়াতি কাজে অংশগ্রহণকারী পরিবার সংখ্যা</th>
                                    <th class="">কতটি নতুন পরিবারে দাওয়াত পৌঁছানো হয়েছে</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >{{$department5->total_attended_family?? ""}}</td>
                                    <td >{{$department5->how_many_new_family_invited?? ""}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h1 class="font-18">গ) দাওয়াহ্ ও প্রকাশনা:</h1>
                <div class="dawah_prokashona">
                    <table class="text-center mb-1">
                        <thead>
                            <tr>
                                <th class="width-20">বিবরণ</th>
                                <th class="width-10">সংখ্যা</th>
                                <th class="width-10">বৃদ্ধি</th>
                                <th class="width-30">বিবরণ</th>
                                <th class="">সংখ্যা</th>
                                <th class="">বৃদ্ধি</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start px-2">বই বিলিকেন্দ্ৰ</td>
                                <td >{{$dawah_prokashona->unit_book_distribution_center?? ""}}</td>
                                <td >{{$dawah_prokashona->unit_book_distribution_center_increase?? ""}}</td>

                                <td class="text-start px-2">বইয়ের সফ্ট কপি বিলি<span>(সংগঠন অনুমোদিত)</span></td>
                                <td >{{$dawah_prokashona->soft_copy_book_distribution?? ""}}</td>
                                <td >{{$dawah_prokashona->soft_copy_book_distribution_increase?? ""}}</td>
                            </tr>
                            <tr>
                                <td class="text-start px-2">বই</td>
                                <td >{{$dawah_prokashona->books_in_pathagar?? ""}}</td>
                                <td >{{$dawah_prokashona->books_in_pathagar_increase?? ""}}</td>

                                <td class="text-start px-2">দাওয়াতি লিংক বিতরণ<span>(সংগঠন অনুমোদিত)</span></td>
                                <td >{{$dawah_prokashona->dawat_link_distribution?? ""}}</td>
                                <td >{{$dawah_prokashona->dawat_link_distribution_increase?? ""}}</td>
                            </tr>
                            <tr>
                                <td class="text-start px-2">বই বিলি/বিক্রি</td>
                                <td >{{$dawah_prokashona->unit_book_distribution?? ""}}</td>
                                <td >{{$dawah_prokashona->unit_book_distribution_increase?? ""}}</td>

                                <td class="text-start px-2">সোনার বাংলা/সংগ্রাম/ পৃথিবী কত কপি চলে</td>
                                <td >
                                    {{$dawah_prokashona->sonar_bangla?? ""}} /
                                    {{$dawah_prokashona->songram?? ""}} /
                                    {{$dawah_prokashona->prithibi?? ""}}
                                </td>
                                <td >
                                    {{$dawah_prokashona->sonar_bangla_increase?? ""}} /
                                    {{$dawah_prokashona->songram_increase?? ""}} /
                                    {{$dawah_prokashona->prithibi_increase?? ""}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h1 class="font-18">ঘ) কর্মসূচি বাস্তবায়ন</h1>
                <div class="dawah_prokashona">
                    <table class="text-center mb-1">
                        <thead>
                            <tr>
                                <th class="width-10px">ক্র</th>
                                <th class="width-30">কর্মসূচির বিবরণ</th>
                                <th class="">সংখ্যা</th>
                                <th class="">টার্গেট</th>
                                <th class="">গড় উপস্থিতি</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >১.</td>
                                <td class="text-start px-2">মাসিক সাধারণ সভা</td>
                                <td >{{$kormosuci->unit_masik_sadaron_sova_total?? ""}}</td>
                                <td >{{$kormosuci->unit_masik_sadaron_sova_target?? ""}}</td>
                                <td >
                                    {{number_format($kormosuci->unit_masik_sadaron_sova_uposthiti / $kormosuci->unit_masik_sadaron_sova_total?? "",1)}}
                                </td>
                            </tr>
                            <tr>
                                <td >২.</td>
                                <td class="text-start px-2">ইফতার মাহফিল (ব্যক্তিগত/সাংগঠনিক)</td>
                                <td >
                                    {{$kormosuci->iftar_mahfil_personal_total?? ""}} /
                                    {{$kormosuci->iftar_mahfil_samostic_total?? ""}}
                                </td>
                                <td >
                                    {{$kormosuci->iftar_mahfil_personal_target?? ""}} /
                                    {{$kormosuci->iftar_mahfil_samostic_target?? ""}}
                                </td>
                                <td >
                                    {{number_format($kormosuci->iftar_mahfil_personal_uposthiti / $kormosuci->iftar_mahfil_personal_total?? "",1)}} /
                                    {{number_format($kormosuci->iftar_mahfil_samostic_uposthiti / $kormosuci->iftar_mahfil_samostic_total?? "",1)}}
                                </td>
                            </tr>
                            <tr>
                                <td >৩.</td>
                                <td class="text-start px-2">চা চক্র/সামষ্টিক খাওয়া/শিক্ষা সফর</td>
                                <td >
                                    {{$kormosuci->cha_chakra_total?? ""}} /
                                    {{$kormosuci->samostic_khawa_total?? ""}} /
                                    {{$kormosuci->sikkha_sofor_total?? ""}}
                                </td>
                                <td >
                                    {{$kormosuci->cha_chakra_target?? ""}} /
                                    {{$kormosuci->samostic_khawa_target?? ""}} /
                                    {{$kormosuci->sikkha_sofor_target?? ""}}
                                </td>
                                <td >
                                    {{number_format($kormosuci->cha_chakra_uposthiti / $kormosuci->cha_chakra_total?? "",1)}} /
                                    {{number_format($kormosuci->samostic_khawa_uposthiti / $kormosuci->samostic_khawa_total?? "",1)}} /
                                    {{number_format($kormosuci->sikkha_sofor_uposthiti / $kormosuci->sikkha_sofor_total?? "",1)}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </section>
        <section class="mt-5">
            <div class="songothon">
                <h1 class="font-18">সংগঠন :</h1>
                <div class="jonoshokti mb-2">
                    <h4 class="fs-6">১. জনশক্তি</h4>
                    <table class="text-center  mb-1 table_layout_fixed">
                        <thead>
                            <tr>
                                <th class="">জনশক্তি ধরন</th>
                                <th class="">বিগত মাসের সংখ্যা</th>
                                <th class="">বর্তমান সংখ্যা</th>
                                <th class="">বৃদ্ধি</th>
                                <th class="">ঘাটতি</th>
                                <th class="">টার্গেট</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start px-2">সদস্য (রুকন)</td>
                                <td >{{$songothon1->rokon_previous?? ""}} </td>
                                <td >{{$songothon1->rokon_present?? ""}} </td>
                                <td >{{$songothon1->rokon_briddhi?? ""}} </td>
                                <td >{{$songothon1->rokon_gatti?? ""}} </td>
                                <td >{{$songothon1->rokon_target?? ""}} </td>
                            </tr>
                            <tr>
                                <td class="text-start px-2">কর্মী</td>
                                <td >{{$songothon1->worker_previous?? ""}} </td>
                                <td >{{$songothon1->worker_present?? ""}} </td>
                                <td >{{$songothon1->worker_briddhi?? ""}} </td>
                                <td >{{$songothon1->worker_gatti?? ""}} </td>
                                <td >{{$songothon1->worker_target?? ""}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="shohojogi mb-2">
                    <h4 class="fs-6">২. সহযোগী সদস্য ও ভিন্নধর্মাবলম্বী :</h4>
                    <table class="text-center  mb-1">
                        <thead>
                            <tr>
                                <th class="w-25">সহযোগী</th>
                                <th class="width-20">বিগত মাসের সংখ্যা</th>
                                <th class="width-20">বর্তমান সংখ্যা</th>
                                <th class="width-15">বৃদ্ধি</th>
                                <th class="width-20">টার্গেট</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start px-2">সহযোগী সদস্য*</td>
                                <td >{{$songothon2->associate_member_previous?? ""}}</td>
                                <td >{{$songothon2->associate_member_present?? ""}}</td>
                                <td >{{$songothon2->associate_member_briddhi?? ""}}</td>
                                <td >{{$songothon2->associate_member_target?? ""}}</td>
                            </tr>
                            <tr>
                                <td class="text-start px-2">ভিন্নধর্মাবলম্বী কর্মী/সহযোগী সদস্য</td>
                                <td >
                                    {{$songothon2->vinno_dormalombi_worker_previous?? ""}} /
                                    {{$songothon2->vinno_dormalombi_associate_member_previous?? ""}}
                                </td>
                                <td >
                                    {{$songothon2->vinno_dormalombi_worker_present?? ""}} /
                                    {{$songothon2->vinno_dormalombi_associate_member_present?? ""}}
                                </td>
                                <td >
                                    {{$songothon2->vinno_dormalombi_worker_briddhi?? ""}} /
                                    {{$songothon2->vinno_dormalombi_associate_member_briddhi?? ""}}
                                </td>
                                <td >
                                    {{$songothon2->vinno_dormalombi_worker_target?? ""}} /
                                    {{$songothon2->vinno_dormalombi_associate_member_target?? ""}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>*দাওয়াত ও তাবলিগের 'ক' এর অধীনে উল্লেখিত সকল সহযোগী সদস্যের সংখ্যা এ ছকে সহযোগী সদস্যের ঘরে বসাতে হবে।</p>
                </div>
                <div class="kormi_boithok d-flex flex-wrap justify-content-between mb-1">
                    <p class="fw-bold fs-6 w-50 ">৩. মাসিক কর্মী বৈঠক সংখ্যা :  {{$songothon9->unit_kormi_boithok_total?? ""}}</p>
                    <p class="fw-bold fs-6 w-50">, উপস্থিতি:  {{$songothon9->unit_kormi_boithok_uposthiti?? ""}}</p>
                </div>
                <div class="paribaik_unit mb-2">
                    <h4 class="fs-6">৪. পারিবারিক ইউনিট*</h4>
                    <table class="text-center  mb-1 table_layout_fixed">
                        <thead>
                            <tr>
                                <th class="width-20">সংখ্যা</th>
                                <th class="width-15">বৃদ্ধি</th>
                                <th class="width-20">টার্গেট</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >{{$songothon5->paribarik_unit_total?? ""}}</td>
                                <td >{{$songothon5->paribarik_unit_uposthiti?? ""}}</td>
                                <td >{{$songothon5->paribarik_unit_target?? ""}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>* পরিবারের জনশক্তি পুরুষ ও মহিলা উভয় হলে পারিবারিক ইউনিটের হিসাব একবারই আসবে।</p>
                </div>
                <div class="urdotono mb-1">
                    <p class="fw-bold fs-6 w-50 ">৫. ঊর্ধ্বতন দায়িত্বশীলদের সফর সংখ্যা :  {{$songothon7->upper_leader_sofor?? ""}}</p>
                </div>
                <div class="ianot mb-2">
                    <h4 class="fs-6">৬. ইয়ানত দাতা বৃদ্ধি :</h4>
                    <table class="text-center  mb-1">
                        <thead>
                            <tr>
                                <th class="w-25">নতুন ইয়ানত দাতা</th>
                                <th class="width-20">সংখ্যা</th>
                                <th class="width-15">টাকার পরিমাণ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start px-2">সহযোগী সদস্য</td>
                                <td >{{$songothon8->associate_member_total?? ""}}</td>
                                <td >{{$songothon8->associate_member_total_iyanot_amounts?? ""}}</td>
                            </tr>
                            <tr>
                                <td class="text-start px-2">সুধী</td>
                                <td >{{$songothon8->sudhi_total?? ""}}</td>
                                <td >{{$songothon8->sudi_total_iyanot_amounts?? ""}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <h1 class="font-18">প্ৰশিক্ষণ :</h1>
            <div class="proshikkhon mb-2">
                <table class="text-center  mb-1">
                    <thead>
                        <tr>
                            <th class="w-50">কর্মসূচির ধরন</th>
                            <th class="">সংখ্যা</th>
                            <th class="">টার্গেট</th>
                            <th class="">উপস্থিতি</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start px-2">তারবিয়াতী বৈঠক (সহীহ কুরআন অনুশীলন/মাসয়ালা-মাসায়েল/ দারসে কুরআন/ দারসে হাদীস / সামষ্টিক পাঠ/বিষয়ভিত্তিক আলোচনা)</td>
                            <td >
                                {{$proshikkhon->sohi_quran_onushilon?? ""}} /
                                {{$proshikkhon->masala_masayel?? ""}} /
                                {{$proshikkhon->darsul_quran?? ""}} /
                                {{$proshikkhon->darsul_hadis?? ""}} /
                                {{$proshikkhon->samostik_path?? ""}} /
                                {{$proshikkhon->bishoy_vittik_onushilon?? ""}}
                            </td>
                            <td >
                                {{$proshikkhon->sohi_quran_onushilon_target?? ""}} /
                                {{$proshikkhon->masala_masayel_target?? ""}} /
                                {{$proshikkhon->darsul_quran_target?? ""}} /
                                {{$proshikkhon->darsul_hadis_target?? ""}} /
                                {{$proshikkhon->samostik_path_target?? ""}} /
                                {{$proshikkhon->bishoy_vittik_onushilon_target?? ""}}
                            </td>
                            <td >
                                {{$proshikkhon->sohi_quran_onushilon_uposthiti?? ""}} /
                                {{$proshikkhon->masala_masayel_uposthiti?? ""}} /
                                {{$proshikkhon->darsul_quran_uposthiti?? ""}} /
                                {{$proshikkhon->darsul_hadis_uposthiti?? ""}} /
                                {{$proshikkhon->samostik_path_uposthiti?? ""}} /
                                {{$proshikkhon->bishoy_vittik_onushilon_uposthiti?? ""}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="shomajsheba">
                <h1 class="font-18">সমাজ সংস্কার ও সমাজসেবা :</h1>
                <div class="personal_shamajik_kaj mb-2">
                    <h4 class="fs-6">১. ব্যক্তিগত উদ্যোগে সামাজিক কাজ:</h4>
                    <table class="text-center  mb-1">
                        <tr>
                            <td class="text-start px-2 ">মোট কতজন ব্যক্তিগত উদ্যোগে সামাজিক কাজ করেছেন</td>
                            <td class="width-20">{{$shomajsheba1->how_many_people_did?? ""}}</td>
                            <td class="text-start px-2 w-25">মোট সেবাপ্রাপ্ত সংখ্যা</td>
                            <td class="width-20">{{$shomajsheba1->service_received_total?? ""}}</td>
                        </tr>
                    </table>
                </div>
                <div class="unit_shamajik_kaj mb-2">
                    <h4 class="fs-6">২. ইউনিটের উদ্যোগে সামাজিক কাজ :</h4>
                    <table class="text-center  mb-1">
                        <thead>
                            <tr>
                                <th class="">বিবরণ</th>
                                <th class="width-20">সংখ্যা</th>
                                <th class="">বিবরণ</th>
                                <th class="width-15">সংখ্যা</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start px-2">সামাজিক অনুষ্ঠানে অংশগ্রহন/সহায়তা প্রদান</td>
                                <td >
                                    {{$shomajsheba2->shamajik_onusthane_ongshogrohon?? ""}} /
                                    {{$shomajsheba2->shamajik_onusthane_shohayota_prodan?? ""}}
                                </td>
                                <td class="text-start px-2">স্বেচ্ছায় রক্ত দান (কতজন/কতজনকে)</td>
                                <td >
                                    {{$shomajsheba2->voluntarily_blood_donation_kotojon?? ""}} /
                                    {{$shomajsheba2->voluntarily_blood_donation_kotojonke?? ""}}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start px-2">সামাজিক বিরোধ মীমাংসা</td>
                                <td >{{$shomajsheba2->shamajik_birodh_mimangsha?? ""}}</td>
                                <td class="text-start px-2">মাতৃত্বকালীন সময়ে সেবা প্রদান (কতজন/কতজনকে)</td>
                                <td >
                                    {{$shomajsheba2->matrikalin_sheba_prodan_kotojon?? ""}} /
                                    {{$shomajsheba2->matrikalin_sheba_prodan_kotojonke?? ""}}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start px-2">মানবিক সহায়তা/কর্জে হাসানা প্রদান (কতজনকে)</td>
                                <td >
                                    {{$shomajsheba2->manobik_shohayota_prodan?? ""}} /
                                    {{$shomajsheba2->korje_hasana_prodan?? ""}}
                                </td>
                                <td class="text-start px-2">মাইয়্যেতের গোসল (কতজনকে)</td>
                                <td >{{$shomajsheba2->mayeter_gosol?? ""}}</td>
                            </tr>
                            <tr>
                                <td class="text-start px-2">রোগীর পরিচর্যা/চিকিৎসা সহায়তা প্রদান (কতজনকে)</td>
                                <td >
                                    {{$shomajsheba2->rogir_poricorja?? ""}} /
                                    {{$shomajsheba2->medical_shohayota_prodan?? ""}}
                                </td>
                                <td class="text-start px-2">অন্যান্য</td>
                                <td >{{$shomajsheba2->others?? ""}}</td>
                            </tr>
                            <tr>
                                <td class="text-start px-2">নবজাতককে গিফ্ট প্রদান (কতজনকে )</td>
                                <td >{{$shomajsheba2->nobojatokke_gift_prodan?? ""}}</td>
                                <td class="text-start px-2"></td>
                                <td ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="rartrio">
                <h1 class="font-18">রাষ্ট্রীয় সংস্কার ও সংশোধন :</h1>
                <div class="bisistomb-2">
                    <p>বিশিষ্ট ব্যক্তিবর্গের সাথে যোগাযোগ সংখ্যা :   <span>{{$rastrio->bishishto_bekti_jogajog?? ""}}</span></p>
                </div>
            </div>
            <div class="baytulmal">
                <div class="title">
                    <h1>বাইতুলমাল</h1>
                </div>
                <p class="fs-6">মাসিক ওয়াদার পরিমাণ :</p>
                <table class="text-center  mb-1 table_layout_fixed">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2">আয়ের বিবরণ</th>
                            <th class="text-center" colspan="2">জমার পরিমাণ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start px-2">ইয়ানত আদায়</td>
                            <td >4300</td>
                            <td class="text-start px-2">ইয়ানত জমা</td>
                            <td >340</td>
                        </tr>
                        <tr>
                            <td class="text-start px-2">এককালীন</td>
                            <td >4000</td>
                            <td class="text-start px-2">এককালীন</td>
                            <td >30000</td>
                        </tr>
                        <tr>
                            <td class="text-start px-2">নির্বাচনী ফান্ড</td>
                            <td >4000</td>
                            <td class="text-start px-2">নির্বাচনী ফান্ড</td>
                            <td >30000</td>
                        </tr>
                        <tr>
                            <td class="text-start px-2">শহীদ ফান্ড কল্যাণ তহবিল</td>
                            <td >4000</td>
                            <td class="text-start px-2">শহীদ ফান্ড কল্যাণ তহবিল</td>
                            <td >30000</td>
                        </tr>
                        <tr>
                            <td class="text-start px-2">সমাজসেবা</td>
                            <td >4000</td>
                            <td class="text-start px-2">সমাজসেবা</td>
                            <td >30000</td>
                        </tr>
                        <tr>
                            <td class="text-start px-2">বই বিক্রি</td>
                            <td >4000</td>
                            <td class="text-start px-2">অন্যান্য</td>
                            <td >30000</td>
                        </tr>
                        <tr>
                            <td class="text-start px-2">অন্যান্য</td>
                            <td >4000</td>
                            <td class="text-start px-2"></td>
                            <td ></td>
                        </tr>
                        <tr>
                            <td class="text-end px-2">সর্বমোট</td>
                            <td >42000</td>
                            <td class="text-end px-2">সর্বমোট</td>
                            <td >50470</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="montobbo">
                <h1 class="fs-6">ইউনিট সভানেত্রীর মন্তব্য :</h1>
                <p></p>
            </div>
        </section>


        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
