<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Joboffer;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory(5)->create();
        // Joboffer::factory(10)->create([
        //     'joboffer' =>'PHP Developer',
        //     'company_id' => Company::factory()->create()->id,
                    
        // ]);

       Joboffer::create([
        'joboffer'=> 'PHP Developer',
        'category_id'=> '1',
        'slug'=> 'php-developer',
        'company_id'=> '3',
        'company_name'=> 'Tramm & Hinners',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);

       Joboffer::create([
        'joboffer'=> 'Laravel Framework',
        'category_id'=> '2',
        'slug'=> 'php-developer',
        'company_id'=> '1',
        'company_name'=> 'Tenmedia',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);

       Joboffer::create([
        'joboffer'=> 'JavaScript Developer',
        'category_id'=> '2',
        'slug'=> 'javascript-developer',
        'company_id'=> '2',
        'company_name'=> 'Secunet',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);

       Joboffer::create([
        'joboffer'=> 'Software Developer Java',
        'category_id'=> '3',
        'slug'=> 'javascript-developer',
        'company_id'=> '2',
        'company_name'=> 'Secunet',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);

       Joboffer::create([
        'joboffer'=> 'HTML Engineer',
        'category_id'=> '3',
        'slug'=> 'html-engineer',
        'company_id'=> '1',
        'company_name'=> 'TenMedia',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);

       Joboffer::create([
        'joboffer'=> 'Software Developer',
        'category_id'=> '1',
        'slug'=> 'html-engineer',
        'company_id'=> '3',
        'company_name'=> 'Tramm & Hinners',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);

       Joboffer::create([
        'joboffer'=> 'Software Developer Embedded Linux Kernel',
        'category_id'=> '2',
        'slug'=> 'html-engineer',
        'company_id'=> '3',
        'company_name'=> 'Tramm & Hinners',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);

       Joboffer::create([
        'joboffer'=> 'Software Developer Embedded Systems',
        'category_id'=> '3',
        'slug'=> 'html-engineer',
        'company_id'=> '3',
        'company_name'=> 'Tramm & Hinners',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);

       Joboffer::create([
        'joboffer'=> 'Software Developer Conversational AI',
        'category_id'=> '1',
        'slug'=> 'html-engineer',
        'company_id'=> '3',
        'company_name'=> 'Tramm & Hinners',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);

       Joboffer::create([
        'joboffer'=> 'Internship',
        'category_id'=> '1',
        'slug'=> 'html-engineer',
        'company_id'=> '3',
        'company_name'=> 'Tramm & Hinners',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);

       Joboffer::create([
        'joboffer'=> 'Java Developer',
        'category_id'=> '1',
        'slug'=> 'html-engineer',
        'company_id'=> '3',
        'company_name'=> 'Tramm & Hinners',
        'location'=> 'Berlin',
        'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'jobdescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'

       ]);
      
        Category::create([
            'name'=> 'Trainee',
            'slug'=> 'trainee'
        ]);

        Category::create([
            'name'=> 'Junior',
            'slug'=> 'junior'
        ]);

        Category::create([
            'name'=> 'Senior',
            'slug'=> 'senior'
        ]);

        Company::create([
            'name'=> 'TenMedia',
            'slug' => 'tenmedia',
            'contact_person'=> 'Susan Niemeier',
            'details'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
        ]);

        Company::create([
            'name'=> 'Secunet',
            'slug' => 'secunet',
            'contact_person'=> 'Ursula LeGuin',
            'details'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
        ]);

        Company::create([
            'name'=> 'Tramm & Hinners',
            'slug' => 'trammandhinners',
            'contact_person'=> 'Maggie OFarrel',
            'details'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
        ]);
    }
}
