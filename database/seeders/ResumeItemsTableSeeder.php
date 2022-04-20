<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\ResumeItem;

class ResumeItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //*** Skills ***//
        ResumeItem::create([
            'name' => 'Front End Development',
            'description' => 'Development of the graphical user interface of a website, through the use of HTML, CSS, and JavaScript.',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Back End Development',
            'description' => 'Take care and maintain the back-end of a website, including databases, servers, and apps.',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Web App Security',
            'description' => 'Variety of processes, technologies, or methods for protecting web servers, web applications, and web services such as APIs from attack by Internet-based threats',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Content Management Systems',
            'description' => 'Allow users to build and manage a website without having to code it',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Database Administration',
            'description' => 'Whole set of activities performed by a database administrator to ensure that a database is always available as needed',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Project Management',
            'description' => 'The process of leading the work of a team to achieve all project goals within the given constraints',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Outdoor Adventure',
            'description' => 'Outdoor activities such as racing, backpacking, cycling, camping, canoeing, disc golf, fishing etc',
            'category' => "1"
        ]);

        //*** Education ***//
        ResumeItem::create([
            'name' => 'IT Web Programming Diploma',
            'description' => 'Transform yourself from a web user to a web developer. This program teaches you computer programming by exploring and building web applications much like the ones you use every day.',
            'category' => "3"
        ]);
        ResumeItem::create([
            'name' => 'Project Management Certificate',
            'description' => 'A globally recognized project management certification that tests a candidates ability to manage the people, processes, and business priorities of a professional project',
            'category' => "3"
        ]);
        ResumeItem::create([
            'name' => 'High School Diploma',
            'description' => 'CEC Truro; French Immersion Certificate; recipient of the Dr. Regis Callaghan Memorial Awad; graduated June 2018.',
            'category' => "3"
        ]);
        ResumeItem::create([
            'name' => 'Laracasts - Laravel From Scratch',
            'description' => 'Push your web development skills to the next level, through expert screencasts on Laravel, Vue, and so much more',
            'category' => "3"
        ]);
        ResumeItem::create([
            'name' => 'AWS Certified Cloud Practitioner',
            'description' => 'Validate your cloud expertise with an industry-recognized credential',
            'category' => "3"
        ]);
        ResumeItem::create([
            'name' => 'Free Code Camp - Vue.js',
            'description' => 'Learn Vue.js in this course',
            'category' => "3"
        ]);
        ResumeItem::create([
            'name' => 'Certified Scrum Master',
            'description' => 'A credential designed to give professionals getting started as Scrum practitioners an understanding of the project management methodology',
            'category' => "3"
        ]);
        //*** Work Experience ***//
        ResumeItem::create([
            'name' => 'NSCC Faculty',
            'description' => ' Worked at NSCC',
            'category' => "2"
        ]);
        ResumeItem::create([
            'name' => 'IT Manager',
            'description' => 'Worked as a IT Manager in a big tech company ',
            'category' => "2"
        ]);
        ResumeItem::create([
            'name' => 'Jr Developer',
            'description' => 'Was a Junior Developer in a small tech company ',
            'category' => "2"
        ]);
        ResumeItem::create([
            'name' => 'Youtube Content Creator',
            'description' => 'Created content for some fancy youtuber',
            'category' => "2"
        ]);
        ResumeItem::create([
            'name' => 'Property Manager',
            'description' => 'Licensed property manager',
            'category' => "2"
        ]);
        ResumeItem::create([
            'name' => 'Lab Monitor',
            'description' => 'Provide assistance to facilitate service desk to end users',
            'category' => "2"
        ]);
        ResumeItem::create([
            'name' => 'Dog Walker',
            'description' => 'Walk dogs for clients and follow agreed-upon routes and schedules.',
            'category' => "2"
        ]);
        //*** Awards, Projects and Other Awesomeness... ***//
        ResumeItem::create([
            'name' => 'Laravel Snowday Project',
            'description' => 'Successfully completed the Laravel Snowday Project',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'Powershell SNMP Project',
            'description' => 'Completed Powershell SNMP Project',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'Game Jam Award',
            'description' => 'Created the best game within 3 days!',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'Lan Party Planning',
            'description' => 'Gathered people for a Lan Party',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'Rotarian of the Year Award',
            'description' => 'Have made significant contributions to Rotary and the community in the form of leadership or in the advancement of ideas and service',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'Running',
            'description' => 'Ran',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'Mountain Climbing',
            'description' => 'Climbed the highest mounting in Canada',
            'category' => "4"
        ]);
    }
}