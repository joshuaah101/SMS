<?php


namespace Modules\Core\Traits;


use Modules\Core\Entities\SiteSetting;
use Modules\School\Entities\School;

trait SiteSettingsTrait
{


    private function get_site_settings()
    {
        if (SiteSetting::count() < 1) {
            $speech = "It is with great pleasure and admiration to introduce our schools to you on this site.

The various Schools that make up the Faith in Christ Schools are very rare Schools.

One reason they are so rare is that the founding purpose of the first school (Nur/Pry) set more than 24years ago, remains at the core of everything that we aim to achieve today. We are notfor-profit, which means that every fund realized from our stakeholders is invested for the progress of our students and Staff.

It is our aim to provide world class teaching that would stir a desire for ever increasing knowledge in our students through outstanding teachers. We put you, our parents and students at the centre of our activities here. Education is a partnership between home and school and we put a great deal of emphasis on our partnership with you, our stakeholders (Parents/Guardians). It is not a gain-saying that children learn best when parents and teachers collaborate. When your Child/Ward(s) starts School it is not where your responsibilities end and School's begin, it is where Ours begin and yours continue. Our sole goal and objective is for every one of our students to achieve outstanding achievement in their education. Wherever they come from, their level, they should achieve better result in Faith in Christ Schools and anywhere else.";
            $speech_2 = "It is with great pleasure and admiration to introduce our schools to you on this site.

The various Schools that make up the Faith in Christ Schools are very rare Schools.

One reason they are so rare is that the founding purpose of the first school (Nur/Pry) set more than 24years ago, remains at the core of everything that we aim to achieve today. We are notfor-profit, which means that every fund realized from our stakeholders is invested for the progress of our students and Staff.

It is our aim to provide world class teaching that would stir a desire for ever increasing knowledge in our students through outstanding teachers. We put you, our parents and students at the centre of our activities here. Education is a partnership between home and school and we put a great deal of emphasis on our partnership with you, our stakeholders (Parents/Guardians). It is not a gain-saying that children learn best when parents and teachers collaborate. When your Child/Ward(s) starts School it is not where your responsibilities end and School's begin, it is where Ours begin and yours continue. Our sole goal and objective is for every one of our students to achieve outstanding achievement in their education. Wherever they come from, their level, they should achieve better result in Faith in Christ Schools and anywhere else.";

            $embedded_map = htmlentities('<div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:300px;height:300px;">
                <div id="googlemaps-canvas" style="height:100%; width:100%;max-width:100%;">
                    <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?q=Faith+in+Christ+College+ilaro&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                </div>
                <a class="googlemaps-html" rel="nofollow" href="https://www.embed-map.com" id="get-data-forembedmap">https://www.embed-map.com</a>
                <style>#googlemaps-canvas .text-marker {
                    }

                    .map-generator {
                        max-width: 100%;
                        max-height: 100%;
                        background: none;
                    }</style>
            </div>');
            $site_school_settings = [
                'school_name' => 'Faith in Christ College',
                'school_motto' => 'Education is the Cornerstone of progress',
                'school_logo' => '/favicon.ico',
                'school_principal' => 'Mrs Principal',
                'school_principal_img' => 'android-chrome-192x192.png',
                'phone_number' => '+234 806 888 5591',
                'email_address' => 'faithinchristcollege@gmail.com',
                'welcome_speech' => $speech,
                'welcome_speech_2' => $speech_2,
                'school_address' => 'Opp Jimtex Block Industry Oke Ola, Ilaro Ogun State. Yewa South 111101 Ilaro, Ogun State, Nigeria',
                'embedded' => $embedded_map
            ];
            SiteSetting::create($site_school_settings);
        }
        return SiteSetting::first();

    }

    private function get_schools()
    {
        return School::all();
    }
}
