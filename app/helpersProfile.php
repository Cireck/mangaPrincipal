<?php
//archivo para crear funciones y utlizaras en el vista o en los archivos blade
//para usar este archivo hay que ir al archivo composer.json en la parte de autoload poner esto, despues delr-/su funcion es cargar los archivos que vayamos a utilizar en proyecto
/*
lep/helpers.ph */
//despues de agregar la linea de codigo, hay que usar el cmd para cargar los archivos composer de nuevo para actualizar
//dentro de la carpeta del proyecto usar el comando
//composer dumpautoload

use Illuminate\Support\Facades\Request;

//es para active la barra si esta la ruta de read se activa el bar read
function profileItemFollowing($rutaActual, $item, $barItem)
{
    if ($rutaActual === 'profileItemFollow' || $rutaActual === 'profileUserItemFollow') {
        if ($item === 'watch' && $barItem === 'watch') {
            return 'active';
        } elseif ($item === 'pending' && $barItem === 'pending') {
            return 'active';
        } elseif ($item === 'follow' && $barItem === 'follow') {
            return 'active';
        } elseif ($item === 'wish' && $barItem === 'wish') {
            return 'active';
        } elseif ($item === 'have' && $barItem === 'have') {
            return 'active';
        } elseif ($item === 'abandoned' && $barItem === 'abandoned') {
            return 'active';
        } else {
            return 'unchecked';
        }
    } else {
        return '';
    }
}

//funcion para enviar propio usuario o del usuario que se esta viendo
function rutaProfile($rutaActual, $paramentros)
{
    if ($rutaActual === 'profileUser' || $rutaActual === 'profileUserItemFollow' || $rutaActual === 'profileUserMyGroups' || $rutaActual === 'profileUserGroupsFollow') {
        return route('profileUser', $paramentros);
    } else {
        return route('profile');
    }
}

//funcion para enviar los items del propio usuario o del usuario que se esta viendo
function rutaProfileItemFollowing($rutaActual, $user, $url, $item)
{
    if ($rutaActual === 'profileUser' || $rutaActual === 'profileUserItemFollow' || $rutaActual === 'profileUserMyGroups' || $rutaActual === 'profileUserGroupsFollow') {
        return route('profileUserItemFollow', ['user' => $user, 'url' => $url, 'item' => $item]);
    } else {
        return route('profileItemFollow', $item);
    }
}

//funcion para enviar los myGroups del propio usuario o del usuario que se esta viendo
function rutaProfileMygroups($rutaActual, $paramentros)
{
    if ($rutaActual === 'profileUser') {
        return route('profileUserMyGroups', $paramentros);
    } else {
        return route('profileMyGroups');
    }
}

//funcion para enviar los groups que esta siguiendo del propio usuario o del usuario que se esta viendo
function rutaProfileGroupFollow($rutaActual, $paramentros)
{
    if ($rutaActual === 'profileUser') {
        return route('profileUserGroupsFollow', $paramentros);
    } else {
        return route('profileGroupsFollow');
    }
}



function nameCounty($county)
{

    if ($county === '1') {
        return 'Afghanistan';
    } elseif ($county === '2') {
        return 'Albania';
    } elseif ($county === '3') {
        return 'Germany';
    } elseif ($county === '4') {
        return 'Andorra';
    } elseif ($county === '5') {
        return 'Angola';
    } elseif ($county === '6') {
        return 'Anguilla';
    } elseif ($county === '7') {
        return 'Antarctica';
    } elseif ($county === '8') {
        return 'Antigua And Barbuda
            ';
    } elseif ($county === '9') {
        return 'Netherlands Antilles
            ';
    } elseif ($county === '10') {
        return 'Saudi Arabia';
    } elseif ($county === '11') {
        return 'Algeria';
    } elseif ($county === '12') {
        return 'Argentina';
    } elseif ($county === '13') {
        return 'Armenia';
    } elseif ($county === '14') {
        return 'Aruba';
    } elseif ($county === '15') {
        return 'Australia';
    } elseif ($county === '16') {
        return 'Austria';
    } elseif ($county === '17') {
        return 'Azerbaijan';
    } elseif ($county === '18') {
        return 'Bahamas';
    } elseif ($county === '19') {
        return 'Bahrain';
    } elseif ($county === '20') {
        return 'Bangladesh';
    } elseif ($county === '21') {
        return 'Barbados';
    } elseif ($county === '22') {
        return 'Belgium';
    } elseif ($county === '23') {
        return 'Belize';
    } elseif ($county === '24') {
        return 'Benin';
    } elseif ($county === '25') {
        return 'Bermuda';
    } elseif ($county === '26') {
        return 'Belarus';
    } elseif ($county === '27') {
        return 'Myanmar';
    } elseif ($county === '28') {
        return 'Bolivia';
    } elseif ($county === '29') {
        return 'Bosnia And
                Herzegovina';
    } elseif ($county === '30') {
        return 'Botswana';
    } elseif ($county === '31') {
        return 'Brazil';
    } elseif ($county === '32') {
        return 'Brunei Darussalam
            ';
    } elseif ($county === '33') {
        return 'Bulgaria';
    } elseif ($county === '34') {
        return 'Burkina Faso';
    } elseif ($county === '35') {
        return 'Burundi';
    } elseif ($county === '36') {
        return 'Bhutan';
    } elseif ($county === '37') {
        return 'Cabo Verde';
    } elseif ($county === '38') {
        return 'Cambodia';
    } elseif ($county === '39') {
        return 'Cameroon';
    } elseif ($county === '40') {
        return 'Canada';
    } elseif ($county === '41') {
        return 'Chad';
    } elseif ($county === '42') {
        return 'Chile';
    } elseif ($county === '43') {
        return 'China';
    } elseif ($county === '44') {
        return 'Cyprus';
    } elseif ($county === '45') {
        return 'Holy See (Vatican
                City State)';
    } elseif ($county === '46') {
        return 'Colombia';
    } elseif ($county === '47') {
        return 'Comoros';
    } elseif ($county === '48') {
        return 'Congo';
    } elseif ($county === '49') {
        return 'Congo, Democratic
                Republic';
    } elseif ($county === '50') {
        return 'Korea, Republic of
            ';
    } elseif ($county === '51') {
        return "Korea, Democratic
                People's Republic of";
    } elseif ($county === '52') {
        return "Cote D'Ivoire
            ";
    } elseif ($county === '53') {
        return 'Costa Rica';
    } elseif ($county === '54') {
        return 'Croatia';
    } elseif ($county === '55') {
        return 'Cuba';
    } elseif ($county === '56') {
        return 'Denmark';
    } elseif ($county === '57') {
        return 'Djibouti';
    } elseif ($county === '58') {
        return 'Dominica';
    } elseif ($county === '59') {
        return 'Ecuador';
    } elseif ($county === '60') {
        return 'Egypt';
    } elseif ($county === '61') {
        return 'El Salvador';
    } elseif ($county === '62') {
        return 'United Arab Emirates
            ';
    } elseif ($county === '63') {
        return 'Eritrea';
    } elseif ($county === '64') {
        return 'Slovenia';
    } elseif ($county === '65') {
        return 'Spain';
    } elseif ($county === '66') {
        return 'United States
            ';
    } elseif ($county === '67') {
        return 'Estonia';
    } elseif ($county === '68') {
        return 'Ethiopia';
    } elseif ($county === '69') {
        return 'Fiji';
    } elseif ($county === '70') {
        return 'Philippines';
    } elseif ($county === '71') {
        return 'Finland';
    } elseif ($county === '72') {
        return 'France';
    } elseif ($county === '73') {
        return 'Gabon';
    } elseif ($county === '74') {
        return 'Gambia';
    } elseif ($county === '75') {
        return 'Georgia';
    } elseif ($county === '76') {
        return 'Ghana';
    } elseif ($county === '77') {
        return 'Gibraltar';
    } elseif ($county === '78') {
        return 'Grenada';
    } elseif ($county === '79') {
        return 'Greece';
    } elseif ($county === '80') {
        return 'Greenland';
    } elseif ($county === '81') {
        return 'Guadeloupe';
    } elseif ($county === '82') {
        return 'Guam';
    } elseif ($county === '83') {
        return 'Guatemala';
    } elseif ($county === '84') {
        return 'Guyana';
    } elseif ($county === '85') {
        return 'French Guiana
            ';
    } elseif ($county === '86') {
        return 'Guinea';
    } elseif ($county === '87') {
        return 'Equatorial Guinea
            ';
    } elseif ($county === '88') {
        return 'Guinea-Bissau
            ';
    } elseif ($county === '89') {
        return 'Haiti';
    } elseif ($county === '90') {
        return 'Honduras';
    } elseif ($county === '91') {
        return 'Hungary';
    } elseif ($county === '92') {
        return 'India';
    } elseif ($county === '93') {
        return 'Indonesia';
    } elseif ($county === '94') {
        return 'Iraq';
    } elseif ($county === '95') {
        return 'Irán';
    } elseif ($county === '96') {
        return 'Ireland';
    } elseif ($county === '97') {
        return 'Bouvet Island
            ';
    } elseif ($county === '98') {
        return 'Christmas Island
            ';
    } elseif ($county === '99') {
        return 'Iceland';
    } elseif ($county === '100') {
        return 'Cayman Islands
            ';
    } elseif ($county === '101') {
        return 'Cook Islands
            ';
    } elseif ($county === '102') {
        return 'Cocos (Keeling)
                Islands';
    } elseif ($county === '103') {
        return 'Faroe Islands
            ';
    } elseif ($county === '104') {
        return 'Heard Island &amp;
                Mcdonald Islands';
    } elseif ($county === '105') {
        return 'Falkland Islands
                (Malvinas)';
    } elseif ($county === '106') {
        return 'Northern Mariana
                Islands';
    } elseif ($county === '107') {
        return 'Marshall Islands
            ';
    } elseif ($county === '108') {
        return 'United States
                Outlying Islands';
    } elseif ($county === '109') {
        return 'Palau';
    } elseif ($county === '110') {
        return 'Solomon Islands
            ';
    } elseif ($county === '111') {
        return 'Svalbard And Jan
                Mayen';
    } elseif ($county === '112') {
        return 'Tokelau';
    } elseif ($county === '113') {
        return 'Turks And Caicos
                Islands';
    } elseif ($county === '114') {
        return 'Virgin Islands,
                U.S.';
    } elseif ($county === '115') {
        return 'Virgin Islands,
                British';
    } elseif ($county === '116') {
        return 'Wallis And Futuna
            ';
    } elseif ($county === '117') {
        return 'Israel';
    } elseif ($county === '118') {
        return 'Italy';
    } elseif ($county === '119') {
        return 'Jamaica';
    } elseif ($county === '120') {
        return 'Japan';
    } elseif ($county === '121') {
        return 'Jordan';
    } elseif ($county === '122') {
        return 'Kazakhstan';
    } elseif ($county === '123') {
        return 'Kenya';
    } elseif ($county === '124') {
        return 'Kyrgyzstan';
    } elseif ($county === '125') {
        return 'Kiribati';
    } elseif ($county === '126') {
        return 'Kuwait';
    } elseif ($county === '127') {
        return "Lao People's
                Democratic Republic";
    } elseif ($county === '128') {
        return 'Lesotho';
    } elseif ($county === '129') {
        return 'Latvia';
    } elseif ($county === '130') {
        return 'Lebanon';
    } elseif ($county === '131') {
        return 'Liberia';
    } elseif ($county === '132') {
        return 'Libyan Arab
                Jamahiriya';
    } elseif ($county === '133') {
        return 'Liechtenstein
            ';
    } elseif ($county === '134') {
        return 'Lithuania';
    } elseif ($county === '135') {
        return 'Luxembourg';
    } elseif ($county === '136') {
        return 'Macedonia';
    } elseif ($county === '137') {
        return 'Madagascar';
    } elseif ($county === '138') {
        return 'Malaysia';
    } elseif ($county === '139') {
        return 'Malawi';
    } elseif ($county === '140') {
        return 'Maldives';
    } elseif ($county === '141') {
        return 'Mali';
    } elseif ($county === '142') {
        return 'Malta';
    } elseif ($county === '143') {
        return 'Morocco';
    } elseif ($county === '144') {
        return 'Martinique';
    } elseif ($county === '145') {
        return 'Mauritius';
    } elseif ($county === '146') {
        return 'Mauritania';
    } elseif ($county === '147') {
        return 'Mayotte';
    } elseif ($county === '148') {
        return 'Mexico';
    } elseif ($county === '149') {
        return 'Micronesia,
                Federated States Of';
    } elseif ($county === '150') {
        return 'Moldova';
    } elseif ($county === '151') {
        return 'Monaco';
    } elseif ($county === '152') {
        return 'Mongolia';
    } elseif ($county === '153') {
        return 'Montserrat';
    } elseif ($county === '154') {
        return 'Mozambique';
    } elseif ($county === '155') {
        return 'Namibia';
    } elseif ($county === '156') {
        return 'Nauru';
    } elseif ($county === '157') {
        return 'Nepal';
    } elseif ($county === '158') {
        return 'Nicaragua';
    } elseif ($county === '159') {
        return 'Niger';
    } elseif ($county === '160') {
        return 'Nigeria';
    } elseif ($county === '161') {
        return 'Niue';
    } elseif ($county === '162') {
        return 'Norfolk Island
            ';
    } elseif ($county === '163') {
        return 'Norway';
    } elseif ($county === '164') {
        return 'New Caledonia
            ';
    } elseif ($county === '165') {
        return 'New Zealand
            ';
    } elseif ($county === '166') {
        return 'Oman';
    } elseif ($county === '167') {
        return 'Netherlands
            ';
    } elseif ($county === '168') {
        return 'Panama';
    } elseif ($county === '169') {
        return 'Papua New Guinea
            ';
    } elseif ($county === '170') {
        return 'Pakistan';
    } elseif ($county === '171') {
        return 'Paraguay';
    } elseif ($county === '172') {
        return 'Peru';
    } elseif ($county === '173') {
        return 'Pitcairn';
    } elseif ($county === '174') {
        return 'French Polynesia
            ';
    } elseif ($county === '175') {
        return 'Poland';
    } elseif ($county === '176') {
        return 'Portugal';
    } elseif ($county === '177') {
        return 'Puerto Rico
            ';
    } elseif ($county === '178') {
        return 'Qatar';
    } elseif ($county === '179') {
        return 'United Kingdom
            ';
    } elseif ($county === '180') {
        return 'Central African
                Republic';
    } elseif ($county === '181') {
        return 'Czech Republic
            ';
    } elseif ($county === '182') {
        return 'South Africa
            ';
    } elseif ($county === '183') {
        return 'Dominican Republic
            ';
    } elseif ($county === '184') {
        return 'Slovakia';
    } elseif ($county === '185') {
        return 'Reunion';
    } elseif ($county === '186') {
        return 'Rwanda';
    } elseif ($county === '187') {
        return 'Romania';
    } elseif ($county === '188') {
        return 'Russian Federation
            ';
    } elseif ($county === '189') {
        return 'Western Sahara
            ';
    } elseif ($county === '190') {
        return 'Saint Kitts And
                Nevis';
    } elseif ($county === '191') {
        return 'Samoa';
    } elseif ($county === '192') {
        return 'American Samoa
            ';
    } elseif ($county === '193') {
        return 'San Marino';
    } elseif ($county === '194') {
        return 'Saint Vincent And
                Grenadines';
    } elseif ($county === '195') {
        return 'Saint Helena
            ';
    } elseif ($county === '196') {
        return 'Saint Lucia
            ';
    } elseif ($county === '197') {
        return 'Sao Tome And
                Principe';
    } elseif ($county === '198') {
        return 'Senegal';
    } elseif ($county === '199') {
        return 'Seychelles';
    } elseif ($county === '200') {
        return 'Sierra Leone
            ';
    } elseif ($county === '201') {
        return 'Singapore';
    } elseif ($county === '202') {
        return 'Syrian Arab
                Republic';
    } elseif ($county === '203') {
        return 'Somalia';
    } elseif ($county === '204') {
        return 'Sri Lanka';
    } elseif ($county === '205') {
        return 'Saint Pierre And
                Miquelon';
    } elseif ($county === '206') {
        return 'Swaziland';
    } elseif ($county === '207') {
        return 'Sudan';
    } elseif ($county === '208') {
        return 'Sweden';
    } elseif ($county === '209') {
        return 'Switzerland
            ';
    } elseif ($county === '210') {
        return 'Suriname';
    } elseif ($county === '211') {
        return 'Thailand';
    } elseif ($county === '212') {
        return 'Taiwan';
    } elseif ($county === '213') {
        return 'Tanzania';
    } elseif ($county === '214') {
        return 'Tajikistan';
    } elseif ($county === '215') {
        return 'French Southern
                Territories';
    } elseif ($county === '216') {
        return 'Timor-Leste
            ';
    } elseif ($county === '217') {
        return 'Togo';
    } elseif ($county === '218') {
        return 'Tonga';
    } elseif ($county === '219') {
        return 'Trinidad And Tobago
            ';
    } elseif ($county === '220') {
        return 'Tunisia';
    } elseif ($county === '221') {
        return 'Turkmenistan
            ';
    } elseif ($county === '222') {
        return 'Turkey';
    } elseif ($county === '223') {
        return 'Tuvalu';
    } elseif ($county === '224') {
        return 'Ukraine';
    } elseif ($county === '225') {
        return 'Uganda';
    } elseif ($county === '226') {
        return 'Uruguay';
    } elseif ($county === '227') {
        return 'Uzbekistan';
    } elseif ($county === '228') {
        return 'Vanuatu';
    } elseif ($county === '229') {
        return 'Venezuela';
    } elseif ($county === '230') {
        return 'Viet Nam';
    } elseif ($county === '231') {
        return 'Yemen';
    } elseif ($county === '232') {
        return 'Yugoslavia';
    } elseif ($county === '233') {
        return 'Zambia';
    } elseif ($county === '234') {
        return 'Zimbabwe';
    } else {
        return 'shinano';
    }
}

function flagCounty($county)
{

    if ($county === '1') {
        return 'flag-icon-af';
    } elseif ($county === '2') {
        return 'flag-icon-al';
    } elseif ($county === '3') {
        return 'flag-icon-de';
    } elseif ($county === '4') {
        return 'flag-icon-ad';
    } elseif ($county === '5') {
        return 'flag-icon-ao';
    } elseif ($county === '6') {
        return 'flag-icon-ai';
    } elseif ($county === '7') {
        return 'flag-icon-aq';
    } elseif ($county === '8') {
        return 'flag-icon-ag';
    } elseif ($county === '9') {
        return 'flag-icon-nl';
    } elseif ($county === '10') {
        return 'flag-icon-sa';
    } elseif ($county === '11') {
        return 'flag-icon-dz';
    } elseif ($county === '12') {
        return 'flag-icon-ar';
    } elseif ($county === '13') {
        return 'flag-icon-am';
    } elseif ($county === '14') {
        return 'flag-icon-aw';
    } elseif ($county === '15') {
        return 'flag-icon-au';
    } elseif ($county === '16') {
        return 'flag-icon-at';
    } elseif ($county === '17') {
        return 'flag-icon-az';
    } elseif ($county === '18') {
        return 'flag-icon-bs';
    } elseif ($county === '19') {
        return 'flag-icon-bh';
    } elseif ($county === '20') {
        return 'flag-icon-bd';
    } elseif ($county === '21') {
        return 'flag-icon-bb';
    } elseif ($county === '22') {
        return 'flag-icon-be';
    } elseif ($county === '23') {
        return 'flag-icon-bz';
    } elseif ($county === '24') {
        return 'flag-icon-bj';
    } elseif ($county === '25') {
        return 'flag-icon-bm';
    } elseif ($county === '26') {
        return 'flag-icon-by';
    } elseif ($county === '27') {
        return 'flag-icon-mm';
    } elseif ($county === '28') {
        return 'flag-icon-bo';
    } elseif ($county === '29') {
        return 'flag-icon-ba';
    } elseif ($county === '30') {
        return 'flag-icon-bw';
    } elseif ($county === '31') {
        return 'flag-icon-bz';
    } elseif ($county === '32') {
        return 'flag-icon-bn';
    } elseif ($county === '33') {
        return 'flag-icon-bg';
    } elseif ($county === '34') {
        return 'flag-icon-bf';
    } elseif ($county === '35') {
        return 'flag-icon-bi';
    } elseif ($county === '36') {
        return 'flag-icon-bt';
    } elseif ($county === '37') {
        return 'flag-icon-cv';
    } elseif ($county === '38') {
        return 'flag-icon-kh';
    } elseif ($county === '39') {
        return 'flag-icon-cm';
    } elseif ($county === '40') {
        return 'flag-icon-ca';
    } elseif ($county === '41') {
        return 'flag-icon-td';
    } elseif ($county === '42') {
        return 'flag-icon-cl';
    } elseif ($county === '43') {
        return 'flag-icon-cn';
    } elseif ($county === '44') {
        return 'flag-icon-cy';
    } elseif ($county === '45') {
        return 'flag-icon-va';
    } elseif ($county === '46') {
        return 'flag-icon-co';
    } elseif ($county === '47') {
        return 'flag-icon-km';
    } elseif ($county === '48') {
        return 'flag-icon-cg';
    } elseif ($county === '49') {
        return 'flag-icon-cd';
    } elseif ($county === '50') {
        return 'flag-icon-kp';
    } elseif ($county === '51') {
        return "flag-icon-kp";
    } elseif ($county === '52') {
        return "flag-icon-ci";
    } elseif ($county === '53') {
        return 'flag-icon-cr';
    } elseif ($county === '54') {
        return 'flag-icon-hr';
    } elseif ($county === '55') {
        return 'flag-icon-cu';
    } elseif ($county === '56') {
        return 'flag-icon-dk';
    } elseif ($county === '57') {
        return 'flag-icon-dj';
    } elseif ($county === '58') {
        return 'flag-icon-dm';
    } elseif ($county === '59') {
        return 'flag-icon-ec';
    } elseif ($county === '60') {
        return 'flag-icon-eg';
    } elseif ($county === '61') {
        return 'flag-icon-sv';
    } elseif ($county === '62') {
        return 'flag-icon-ae';
    } elseif ($county === '63') {
        return 'flag-icon-er';
    } elseif ($county === '64') {
        return 'flag-icon-si';
    } elseif ($county === '65') {
        return 'flag-icon-es';
    } elseif ($county === '66') {
        return 'flag-icon-us';
    } elseif ($county === '67') {
        return 'flag-icon-ee';
    } elseif ($county === '68') {
        return 'flag-icon-et';
    } elseif ($county === '69') {
        return 'flag-icon-fj';
    } elseif ($county === '70') {
        return 'flag-icon-ph';
    } elseif ($county === '71') {
        return 'flag-icon-fi';
    } elseif ($county === '72') {
        return 'flag-icon-fr';
    } elseif ($county === '73') {
        return 'flag-icon-ga';
    } elseif ($county === '74') {
        return 'flag-icon-gm';
    } elseif ($county === '75') {
        return 'flag-icon-ge';
    } elseif ($county === '76') {
        return 'flag-icon-gh';
    } elseif ($county === '77') {
        return 'flag-icon-gi';
    } elseif ($county === '78') {
        return 'flag-icon-gd';
    } elseif ($county === '79') {
        return 'flag-icon-gr';
    } elseif ($county === '80') {
        return 'flag-icon-gl';
    } elseif ($county === '81') {
        return 'flag-icon-gp';
    } elseif ($county === '82') {
        return 'flag-icon-gu';
    } elseif ($county === '83') {
        return 'flag-icon-gt';
    } elseif ($county === '84') {
        return 'flag-icon-gy';
    } elseif ($county === '85') {
        return 'flag-icon-gf';
    } elseif ($county === '86') {
        return 'flag-icon-gn';
    } elseif ($county === '87') {
        return 'flag-icon-gq';
    } elseif ($county === '88') {
        return 'flag-icon-gw';
    } elseif ($county === '89') {
        return 'flag-icon-ht';
    } elseif ($county === '90') {
        return 'flag-icon-hn';
    } elseif ($county === '91') {
        return 'flag-icon-hu';
    } elseif ($county === '92') {
        return 'flag-icon-in';
    } elseif ($county === '93') {
        return 'flag-icon-id';
    } elseif ($county === '94') {
        return 'flag-icon-iq';
    } elseif ($county === '95') {
        return 'flag-icon-ir';
    } elseif ($county === '96') {
        return 'flag-icon-ie';
    } elseif ($county === '97') {
        return 'flag-icon-bv
            ';
    } elseif ($county === '98') {
        return 'flag-icon-cx';
    } elseif ($county === '99') {
        return 'flag-icon-is';
    } elseif ($county === '100') {
        return 'flag-icon-ky';
    } elseif ($county === '101') {
        return 'flag-icon-ck';
    } elseif ($county === '102') {
        return 'flag-icon-cc';
    } elseif ($county === '103') {
        return 'flag-icon-fo';
    } elseif ($county === '104') {
        return 'flag-icon-hm';
    } elseif ($county === '105') {
        return 'flag-icon-fk';
    } elseif ($county === '106') {
        return 'flag-icon-mp';
    } elseif ($county === '107') {
        return 'flag-icon-mp';
    } elseif ($county === '108') {
        return 'flag-icon-um';
    } elseif ($county === '109') {
        return 'flag-icon-pw';
    } elseif ($county === '110') {
        return 'flag-icon-sb';
    } elseif ($county === '111') {
        return 'flag-icon-sj';
    } elseif ($county === '112') {
        return 'flag-icon-tk';
    } elseif ($county === '113') {
        return 'flag-icon-tc';
    } elseif ($county === '114') {
        return 'flag-icon-vi';
    } elseif ($county === '115') {
        return 'flag-icon-vg';
    } elseif ($county === '116') {
        return 'flag-icon-wf';
    } elseif ($county === '117') {
        return 'flag-icon-il';
    } elseif ($county === '118') {
        return 'flag-icon-it';
    } elseif ($county === '119') {
        return 'flag-icon-jm';
    } elseif ($county === '120') {
        return 'flag-icon-jp';
    } elseif ($county === '121') {
        return 'flag-icon-jo';
    } elseif ($county === '122') {
        return 'flag-icon-kz';
    } elseif ($county === '123') {
        return 'flag-icon-ke';
    } elseif ($county === '124') {
        return 'flag-icon-kg';
    } elseif ($county === '125') {
        return 'flag-icon-ki';
    } elseif ($county === '126') {
        return 'flag-icon-kw';
    } elseif ($county === '127') {
        return "flag-icon-la";
    } elseif ($county === '128') {
        return 'flag-icon-ls';
    } elseif ($county === '129') {
        return 'flag-icon-lv';
    } elseif ($county === '130') {
        return 'flag-icon-lb';
    } elseif ($county === '131') {
        return 'flag-icon-lr';
    } elseif ($county === '132') {
        return 'flag-icon-ly';
    } elseif ($county === '133') {
        return 'flag-icon-li';
    } elseif ($county === '134') {
        return 'flag-icon-lt';
    } elseif ($county === '135') {
        return 'flag-icon-lu';
    } elseif ($county === '136') {
        return 'flag-icon-mk';
    } elseif ($county === '137') {
        return 'flag-icon-mg';
    } elseif ($county === '138') {
        return 'flag-icon-my';
    } elseif ($county === '139') {
        return 'flag-icon-mw';
    } elseif ($county === '140') {
        return 'flag-icon-mv';
    } elseif ($county === '141') {
        return 'flag-icon-ml';
    } elseif ($county === '142') {
        return 'flag-icon-mt';
    } elseif ($county === '143') {
        return 'flag-icon-ma';
    } elseif ($county === '144') {
        return 'flag-icon-mq';
    } elseif ($county === '145') {
        return 'flag-icon-mu';
    } elseif ($county === '146') {
        return 'flag-icon-mr';
    } elseif ($county === '147') {
        return 'flag-icon-yt';
    } elseif ($county === '148') {
        return 'flag-icon-mx';
    } elseif ($county === '149') {
        return 'flag-icon-fm';
    } elseif ($county === '150') {
        return 'flag-icon-md';
    } elseif ($county === '151') {
        return 'flag-icon-mc';
    } elseif ($county === '152') {
        return 'flag-icon-mn';
    } elseif ($county === '153') {
        return 'flag-icon-ms';
    } elseif ($county === '154') {
        return 'flag-icon-mz';
    } elseif ($county === '155') {
        return 'flag-icon-na';
    } elseif ($county === '156') {
        return 'flag-icon-nr';
    } elseif ($county === '157') {
        return 'flag-icon-np';
    } elseif ($county === '158') {
        return 'flag-icon-ni';
    } elseif ($county === '159') {
        return 'flag-icon-ne';
    } elseif ($county === '160') {
        return 'flag-icon-ng';
    } elseif ($county === '161') {
        return 'flag-icon-nu';
    } elseif ($county === '162') {
        return 'flag-icon-nf';
    } elseif ($county === '163') {
        return 'flag-icon-no';
    } elseif ($county === '164') {
        return 'flag-icon-bc';
    } elseif ($county === '165') {
        return 'flag-icon-nz';
    } elseif ($county === '166') {
        return 'flag-icon-om';
    } elseif ($county === '167') {
        return 'flag-icon-nl';
    } elseif ($county === '168') {
        return 'flag-icon-pa';
    } elseif ($county === '169') {
        return 'flag-icon-pg';
    } elseif ($county === '170') {
        return 'flag-icon-pk';
    } elseif ($county === '171') {
        return 'flag-icon-py';
    } elseif ($county === '172') {
        return 'flag-icon-pe';
    } elseif ($county === '173') {
        return 'flag-icon-pn';
    } elseif ($county === '174') {
        return 'flag-icon-pf';
    } elseif ($county === '175') {
        return 'flag-icon-pl';
    } elseif ($county === '176') {
        return 'flag-icon-pt';
    } elseif ($county === '177') {
        return 'flag-icon-pr';
    } elseif ($county === '178') {
        return 'flag-icon-qa';
    } elseif ($county === '179') {
        return 'flag-icon-gb';
    } elseif ($county === '180') {
        return 'flag-icon-cf';
    } elseif ($county === '181') {
        return 'flag-icon-cz';
    } elseif ($county === '182') {
        return 'flag-icon-za';
    } elseif ($county === '183') {
        return 'flag-icon-do';
    } elseif ($county === '184') {
        return 'flag-icon-sk';
    } elseif ($county === '185') {
        return 'flag-icon-re';
    } elseif ($county === '186') {
        return 'flag-icon-rw';
    } elseif ($county === '187') {
        return 'flag-icon-ro';
    } elseif ($county === '188') {
        return 'flag-icon-ru';
    } elseif ($county === '189') {
        return 'flag-icon-eh';
    } elseif ($county === '190') {
        return 'flag-icon-kn';
    } elseif ($county === '191') {
        return 'flag-icon-ws';
    } elseif ($county === '192') {
        return 'flag-icon-as';
    } elseif ($county === '193') {
        return 'flag-icon-sm';
    } elseif ($county === '194') {
        return 'flag-icon-vc';
    } elseif ($county === '195') {
        return 'flag-icon-sh';
    } elseif ($county === '196') {
        return 'flag-icon-lc';
    } elseif ($county === '197') {
        return 'flag-icon-st';
    } elseif ($county === '198') {
        return 'flag-icon-sn';
    } elseif ($county === '199') {
        return 'flag-icon-sc';
    } elseif ($county === '200') {
        return 'flag-icon-sl';
    } elseif ($county === '201') {
        return 'flag-icon-sg';
    } elseif ($county === '202') {
        return 'flag-icon-sy';
    } elseif ($county === '203') {
        return 'flag-icon-so';
    } elseif ($county === '204') {
        return 'flag-icon-lk';
    } elseif ($county === '205') {
        return 'flag-icon-pm';
    } elseif ($county === '206') {
        return 'flag-icon-sz';
    } elseif ($county === '207') {
        return 'flag-icon-sd';
    } elseif ($county === '208') {
        return 'flag-icon-se';
    } elseif ($county === '209') {
        return 'flag-icon-ch';
    } elseif ($county === '210') {
        return 'flag-icon-sr';
    } elseif ($county === '211') {
        return 'flag-icon-th';
    } elseif ($county === '212') {
        return 'flag-icon-tw';
    } elseif ($county === '213') {
        return 'flag-icon-tz';
    } elseif ($county === '214') {
        return 'flag-icon-tj';
    } elseif ($county === '215') {
        return 'flag-icon-tf';
    } elseif ($county === '216') {
        return 'flag-icon-tl';
    } elseif ($county === '217') {
        return 'flag-icon-tg';
    } elseif ($county === '218') {
        return 'flag-icon-to';
    } elseif ($county === '219') {
        return 'flag-icon-tt';
    } elseif ($county === '220') {
        return 'flag-icon-tn';
    } elseif ($county === '221') {
        return 'flag-icon-tm';
    } elseif ($county === '222') {
        return 'flag-icon-tr';
    } elseif ($county === '223') {
        return 'flag-icon-tv';
    } elseif ($county === '224') {
        return 'flag-icon-ua';
    } elseif ($county === '225') {
        return 'flag-icon-ug';
    } elseif ($county === '226') {
        return 'flag-icon-uy';
    } elseif ($county === '227') {
        return 'flag-icon-uz';
    } elseif ($county === '228') {
        return 'flag-icon-vu';
    } elseif ($county === '229') {
        return 'flag-icon-ve';
    } elseif ($county === '230') {
        return 'flag-icon-vn';
    } elseif ($county === '231') {
        return 'flag-icon-ye';
    } elseif ($county === '232') {
        return 'Yugoslavia';
    } elseif ($county === '233') {
        return 'flag-icon-zm';
    } elseif ($county === '234') {
        return 'flag-icon-zm';
    } else {
        return '';
    }
}
