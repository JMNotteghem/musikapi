<?php

namespace App\ApiResource;


enum StyleEnum: string
{
    case ROCK          = 'ROCK';
    case POP           = 'POP';
    case RNB           = 'R&B';
    case HIP_HOP       = 'HIP_HOP';
    case ELECTRO       = 'ELECTRO';
    case JAZZ          = 'JAZZ';
    case BLUES         = 'BLUES';
    case CLASSIQUE     = 'CLASSIQUE';
    case METAL         = 'METAL';
    case PUNK          = 'PUNK';
    case REGGAE        = 'REGGAE';
    case COUNTRY       = 'COUNTRY';
    case FOLK          = 'FOLK';
    case SOUL          = 'SOUL';
    case FUNK          = 'FUNK';
    case DISCO         = 'DISCO';
    case INDIE         = 'INDIE';
    case ALTERNATIF    = 'ALTERNATIF';
    case ELECTRO_POP   = 'ELECTRO_POP';
    case TECHNO        = 'TECHNO';
    case HOUSE         = 'HOUSE';
    case DUBSTEP       = 'DUBSTEP';
    case TRANCE        = 'TRANCE';
    case AMBIENT       = 'AMBIENT';
    case RAP           = 'RAP';
    case GOSPEL        = 'GOSPEL';
    case LATINO        = 'LATINO';
    case K_POP         = 'K_POP';
    case J_POP         = 'J_POP';
    case WORLD         = 'WORLD';
    case NEW_AGE       = 'NEW_AGE';
    case EXPERIMENTAL  = 'EXPERIMENTAL';
    case GLAM_ROCK     = 'GLAM_ROCK';
    case HARD_ROCK     = 'HARD_ROCK';
    case PROG_ROCK     = 'PROG_ROCK';
    case PSYCHEDELIC   = 'PSYCHEDELIC';
    case GRUNGE        = 'GRUNGE';
    case EMO           = 'EMO';
    case SKA           = 'SKA';
    case DANCEHALL     = 'DANCEHALL';
    case FLAMENCO      = 'FLAMENCO';
    case BOSSA_NOVA    = 'BOSSA_NOVA';
    case OPERA         = 'OPERA';
}
