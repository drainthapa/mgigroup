<?php

use Illuminate\Database\Seeder;
use App\Career;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Career::create([
    		'title' => 'Enterprise Sales Executive',
            'slug' => 'enterprise-sales-executive',
    		'location' => 'Manakamana Eta Udhyog',
    		'cmp_description' => 'Manakamana Eta Udhyog is looking for a highly driven, focused, and high impact Enterprise Sales Executive with strong knowledge of Big Data Analytics products or enterprise-wide software technologies and value-driven sales. We are seeking someone experienced in complex selling situations to both very technical customers as well as C-Level and other decision makers. You will be comfortable selling an advanced analytics solution that empowers organizations to solve their most difficult data science problems. ',
    		'responsiblities' => 'Build and drive territory/account sales plans for assigned geographic territory/verticals/named accounts and meet and exceed sales goals through value selling.Work closely with Customer Facing Data Scientists, to demonstrate business value through technical proof of value sessions.Deliver presentations/demonstrations highlighting the benefits of DataRobot.Maintain an understanding of key industry trends and competitive issues and products.Practice effective, excellent communication with management, customers and support staff.Provide regular reporting of pipeline and accurate forecasts through salesforce.com.',
    		'requirements' => 'BA/BS degree and 7+ years experience selling Enterprise Software and exceeding quotas.Experience selling analytics, data, databases, predictive modeling, or business intelligence software.Experience selling emerging technologies, winning new logos, and building territories.Experience in selling to and expanding large Enterprise Accounts.Trained in Solution/Value Selling Methodologies.Proven Track record of consistent overachievement of Sales Quota.Must be willing to travel to customers and prospects within the territory as needed.Work experience in startup environment.Good English speaking/writing skill required.Highly driven and Results Oriented.',
    		'deadline' => 'Till the last week of Shrawan',
    	]);

    	Career::create([
    		'title' => 'IT Helpdesk Manager',
            'slug' => 'it-help-desk-manager',
    		'location' => 'New Manakamana Eta Udhyog',
    		'cmp_description' => 'You will be responsible for managing the day to day operations of the IT Helpdesk team and have 3 IT Helpdesk agents that will report directly to you. You’ll spend time triaging tickets in our ticketing portal,  supporting over 1,000 employees globally providing them with amazing experience while maintaining best practice with security and safety in mind. Additionally, you’ll report directly to the IT manager and work closely with another Boston based IT Helpdesk Manager to ensure goals are aligned and met. When not managing the ticketing system and day to day office operations, you’ll spend your time mentoring and coaching your team and helping them grow. Lastly, you’ll have the opportunity to participate in our bi-weekly sprint to get involved in exciting far-reaching projects.',
    		'responsiblities' => 'Manage daily Helpdesk operations in providing Tier I, first contact intake/support.Analyze performance of the IT Helpdesk team by tracking key metrics.Provide oversight and support to the local offices in Kyiv, Lviv and Khmelnytsky.Collaborate daily with a global IT Helpdesk, IT Operations and our Enterprise Infosec team based in Boston, Kyiv and Tokyo to complete goals and projects.Train, coach and mentor your direct reports.Help develop and enforce request handling and escalation policies and procedures.Monitor ticketing trends to identify and anticipate potential problems for proactive resolution. ',
    		'requirements' => '3-5 years of IT experience Have managed a technical teamStrong KPI, reporting and monitoring skills. Ability to identify and analyze process-related metrics.Knowledge and experience in MacOS troubleshooting, maintenance and repair. Experience with using, troubleshooting and maintaining SaaS services such as Freshservice, Gsuite Enterprise, Slack, Zoom, Office365 and OKTA.Ability to be on call for weekends and off-hours to help maintain 24/7 365 global coverage.Strong leadership and communication skills, judgement and the ability to work effectively with our colleagues around the world.',
    		'deadline' => 'Till the last week of Bhadra',
    	]);

    	Career::create([
    		'title' => 'Senior Support Engineer',
            'slug' => 'senior-support-engineer',
    		'location' => 'New Manakamana Eta Udhyog',
    		'cmp_description' => 'There is no hotter field than artificial intelligence, and New Manakamana Eta Udhyog is at the forefront. New Manakamana Eta Udhyog is a leader helping global businesses achieve their AI objectives and realize incredible business value through successful use of the New Manakamana Eta Udhyog Automated Machine Learning Platform. With the help of Paxata product, New Manakamana Eta Udhyog implements a full end-to-end machine learning pipeline, from data to value.',
    		'responsiblities' => 'Provide support to Paxata Data Preparation platform usersHelp customers over email or zoom/webex meeting.Handle issues related to hosting, installation, and advanced software support for on-prem and SaaS.Custom installations, including Hadoop or non-standard environments.Position as final level of Paxata support expertise prior to escalation to engineering.Work with Paxata subject matter experts, data scientists, and engineers to resolve customer issues.Create workarounds when standard procedures have failed and ensure issues are solved in a timely manner.Document customer problems and resolutions, create knowledge base content related to software usage. Work in non-standard hours to help customers from Asia and US and participate in on-call rotations.Develop a career in data science and data engineering.',
    		'requirements' => '5+ years of industry customer support experience.Strong verbal and written communication skills.Hands-on experience and knowledge of Scala and Java languages.Experience troubleshooting Java based application (concepts of jdbc driver, jars, jstack, memory etc ).Senior Linux administration and enterprise network engineering .Experience of installation using rpm files and rpm based installation using yum.Infrastructure orchestration tools (Ansible).',
    		'deadline' => 'Till the last week of Bhadra',
    	]);
    }
}
