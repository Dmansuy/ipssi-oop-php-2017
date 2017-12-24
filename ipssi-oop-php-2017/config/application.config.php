<?php

use Application\Controller\IndexController;
use Application\Controller\LecturerController;
use Application\Factory\DateTimeImmutableFactory;
use Application\Factory\DbConfigProviderFactory;
use Application\Factory\IndexControllerFactory;
use Application\Factory\LecturerControllerFactory;
use Application\Factory\LecturerRepositoryFactory;
use Application\Factory\ParseUriHelperFactory;
use Application\Factory\PdoConnectionFactory;
use Application\Factory\RouterFactory;
use Application\Provider\DbConfigProvider;
use Application\Repository\LecturerRepository;
use Application\Router\ParseUriHelper;
use Application\Router\Router;
       
 // Configurations liées aux films
use Cinema\Controller\FilmController;
use Cinema\Controller\ShowFilmController;
use Cinema\Factory\FilmControllerFactory;
use Cinema\Factory\FilmRepositoryFactory;
use Cinema\Factory\ShowFilmControllerFactory;
use Cinema\Repository\FilmRepository;

// Configurations liées aux meetings
use Conferences\Repository\MeetingRepository;
use Conferences\Controller\MeetingController;
use Conferences\Controller\ShowMeetingController;
use Conferences\Factory\MeetingControllerFactory;
use Conferences\Factory\MeetingRepositoryFactory;
use Conferences\Factory\ShowMeetingControllerFactory;

// Configurations liées aux meetings à venir
use Conferences\Controller\ShowCommingMeetingController;
use Conferences\Controller\CommingMeetingController;
use Conferences\Factory\CommingMeetingControllerFactory;
use Conferences\Factory\ShowCommingMeetingControllerFactory;
use Conferences\Factory\CommingMeetingRepositoryFactory;

// Configurations liées aux attendees
use Conferences\Repository\AttendeesRepository;
use Conferences\Controller\AttendeesController;
use Conferences\Factory\AttendeesControllerFactory;
use Conferences\Controller\ShowAttendeesController;
use Conferences\Factory\ShowAttendeesControllerFactory;

// Configurations liées aux organisers
use Conferences\Repository\OrganisersRepository;
use Conferences\Controller\OrganisersController;
use Conferences\Factory\OrganisersControllerFactory;
use Conferences\Controller\ShowOrganisersController;
use Conferences\Factory\ShowOrganisersControllerFactory;
use Conferences\Factory\OrganisersRepositoryFactory;

// Configurations liées aux subscribtion
use Conferences\Repository\SubscribeRepository;
use Conferences\Controller\SubscribeController;
use Conferences\Factory\SubscribeControllerFactory;
use Conferences\Controller\ShowSubscribeController;
use Conferences\Factory\ShowSubscribeControllerFactory;
use Conferences\Factory\SubscribeRepositoryFactory;

 // Configurations liées aux add meeting
use Conferences\Controller\AddMeetingController;
use Conferences\Factory\AddMeetingControllerFactory;
use Conferences\Controller\ShowAddMeetingController;
use Conferences\Factory\ShowAddMeetingControllerFactory;
use Conferences\Factory\AddMeetingRepositoryFactory;

// Configurations liées aux add deleting
use Conferences\Controller\DeleteController;
use Conferences\Factory\DeleteControllerFactory;
use Conferences\Controller\ShowDeleteController;
use Conferences\Factory\ShowDeleteControllerFactory;
use Conferences\Factory\DeleteRepositoryFactory;

return [
    'factories' => [
        // Configuration du "framework applicatif"
        ParseUriHelper::class => ParseUriHelperFactory::class,
        Router::class => RouterFactory::class,
        PDO::class => PdoConnectionFactory::class,
        DbConfigProvider::class => DbConfigProviderFactory::class,

        // Configurations liées aux lecturers
        DateTimeInterface::class => DateTimeImmutableFactory::class,
        LecturerController::class => LecturerControllerFactory::class,
        IndexController::class => IndexControllerFactory::class,
        LecturerRepository::class => LecturerRepositoryFactory::class,

        // Configurations liées aux films
        FilmController::class => FilmControllerFactory::class,
        ShowFilmController::class => ShowFilmControllerFactory::class,
        FilmRepository::class => FilmRepositoryFactory::class,

        // Configurations liées aux meetings
        MeetingController::class => MeetingControllerFactory::class,
        ShowMeetingController::class => ShowMeetingControllerFactory::class,
        MeetingRepository::class => MeetingRepositoryFactory::class,

        // Configurations liées aux meetings à venir
        CommingMeetingController::class => CommingMeetingControllerFactory::class,
        ShowCommingMeetingController::class => ShowCommingMeetingControllerFactory::class,
        MeetingRepository::class => MeetingRepositoryFactory::class,

        // Configurations liées aux attendees
        AttendeesController::class => AttendeesControllerFactory::class,
        ShowAttendeesController::class => ShowAttendeesControllerFactory::class,
        AttendeesRepository::class => AttendeesRepositoryFactory::class,

        // Configurations liées aux organisers
        OrganisersController::class => OrganisersControllerFactory::class,
        ShowOrganisersController::class => ShowOrganisersControllerFactory::class,
        OrganisersRepository::class => OrganisersRepositoryFactory::class,

        // Configurations liées aux subscribtion
        SubscribeController::class => SubscribeControllerFactory::class,
        ShowSubscribeController::class => ShowSubscribeControllerFactory::class,
        SubscribeRepository::class => SubscribeRepositoryFactory::class,

        // Configurations liées aux add meeting
        AddMeetingController::class => AddMeetingControllerFactory::class,
        ShowAddMeetingeController::class => ShowAddMeetingControllerFactory::class,
        MeetingRepository::class => AddMeetingRepositoryFactory::class,

        // Configurations liées aux add deleting
        DeleteController::class => DeleteControllerFactory::class,
        ShowDeleteController::class => ShowDeleteControllerFactory::class,
        MeetingRepository::class => DeleteRepositoryFactory::class,

    ],
];
