<?php

class ExperienceModel extends Model
{
	
	public function get_data()
    {
        $data['projects'] = $this->simulateData();

        $projectsCount = isset($data['projects']) ? count($data['projects']) : 0;
        if ( $projectsCount === 0 )
            throw new Exception("Something wrong with projects!");

        return $data;
    }

    private function simulateData()
    {
        // projects should be taken from db

        $projects = array();

        $projects[] = array(
            'Year' => '2015',
            'Projects' => 'University course task',
            'Description' => 'Build minimal graph using double dimension matrix with Prim-Kruskal algorithm',
            'Technologies' => 'C++'
        );

        $projects[] = array(
            'Year' => '2015-2016',
            'Projects' => 'Freelance',
            'Description' => 'Work on Fl.ru; tasks statements were different. From file processing to simulation hierarchy on some subject and cover it with unit tests',
            'Technologies' => 'C++'
        );

        $projects[] = array(
            'Year' => '2016',
            'Projects' => 'Freelance',
            'Description' => 'Try myself in Web; work with CMSs, so projects were attached to web markets',
            'Technologies' => "Js, Php, Html, Css, JSON, Sql, Ajax, Drupal, Wordpress, Opencart"
        );

        $projects[] = array(
            'Year' => '2016',
            'Projects' => 'C++ University projects',
            'Description' => 'Data structures and algorithms learning; optimization existing projects',
            'Technologies' => "C++"
        );

        $projects[] = array(
            'Year' => '2017',
            'Projects' => 'Unity Maze Game',
            'Description' => 'Was interested in game development, so tried and develop first person action game with Unity 3D Engine; learning algorithm Hunt-and-Kill for maze construction',
            'Technologies' => "Unity, C#"
        );

        $projects[] = array(
            'Year' => '2017',
            'Projects' => 'Schematic processors(hardware)',
            'Description' => 'Work at Aldec inc. as C++ intern; embedded VHDL similar languages',
            'Technologies' => "VHDL, C++, Linux, Svn, company's schematic IDEs"
        );

        $projects[] = array(
            'Year' => '2017',
            'Projects' => 'Client-server application',
            'Description' => 'Developed client-server application that working like synchronizer; process commands like "delete", "update", "rename"; allows you to establish synchronization between server folder and client folder',
            'Technologies' => "C#, .Net"
        );

        $projects[] = array(
            'Year' => '2018',
            'Projects' => 'Cutaway site/Portfolio',
            'Description' => 'Designed and developed a site that describes me as programmer',
            'Technologies' => "Html, Css, Js, Php"
        );

        return $projects;
    }
}
