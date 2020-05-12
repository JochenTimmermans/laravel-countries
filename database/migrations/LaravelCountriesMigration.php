<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('full_name');
			$table->string('iso_2', 2);
			$table->string('iso_3', 3);
			$table->string('numeric', 10);
			$table->string('tld', 10);
			$table->timestamps();
		});

		$countries = [
			['Afghanistan', 'The Islamic Republic of Afghanistan', 'UN member state', 'AF', 'AFG', '004', 'af' ],
			['Albania', 'The Republic of Albania', 'UN member state', 'AL', 'ALB', '008', 'al' ],
			['Algeria', "The People's Democratic Republic of Algeria", 'UN member state', 'DZ', 'DZA', '012', 'dz' ],
			['Andorra', 'The Principality of Andorra', 'UN member state', 'AD', 'AND', '020', 'ad'],
			['Angola', 'The Republic of Angola', 'UN member state', 'AO', 'AGO', '024', 'ao'],
			['Antigua and Barbuda', 'Antigua and Barbuda', 'UN member state', 'AG', 'ATG', '028', 'ag'],
			['Argentina', 'The Argentine Republic', 'UN member state', 'AR', 'ARG', '032', 'ar'],
			['Armenia', 'The Republic of Armenia', 'UN member state', 'AM', 'ARM', '051', 'am'],
			['Australia', 'The Commonwealth of Australia', 'UN member state', 'AU', 'AUS', '036', 'au' ],
			['Austria', 'The Republic of Austria', 'UN member state', 'AT', 'AUT', '040', 'at' ],
			['Azerbaijan', 'The Republic of Azerbaijan', 'UN member state', 'AZ', 'AZE', '031', 'az' ],
			['Bahamas, The', 'The Commonwealth of The Bahamas', 'UN member state', 'BS', 'BHS', '044', 'bs' ],
			['Bahrain', 'The Kingdom of Bahrain', 'UN member state', 'BH', 'BHR', '048', 'bh' ],
			['Bangladesh', "The People's Republic of Bangladesh", 'UN member state', 'BD', 'BGD', '050', 'bd' ],
			['Barbados', 'Barbados', 'UN member state', 'BB', 'BRB', '052', 'bb' ],
			['Belarus', 'The Republic of Belarus', 'UN member state', 'BY', 'BLR', '112', 'by' ],
			['Belgium', 'The Kingdom of Belgium', 'UN member state', 'BE', 'BEL', '056', 'be' ],
			['Belize', 'Belize', 'UN member state', 'BZ', 'BLZ', '084', 'bz' ],
			['Benin', 'The Republic of Benin', 'UN member state', 'BJ', 'BEN', '204', 'bj' ],
			['Bhutan', 'The Kingdom of Bhutan', 'UN member state', 'BT', 'BTN', '064', 'bt' ],
			['Bolivia', 'The Plurinational State of Bolivia', 'UN member state', 'BO', 'BOL', '068', 'bo' ],
			['Bosnia and Herzegovina', 'Bosnia and Herzegovina', 'UN member state', 'BA', 'BIH', '070', 'ba' ],
			['Botswana', 'The Republic of Botswana', 'UN member state', 'BW', 'BWA', '072', 'bw' ],
			['Brazil', 'The Federative Republic of Brazil', 'UN member state', 'BR', 'BRA', '076', 'br' ],
			['Brunei','The Nation of Brunei', 'UN member state', 'BN', 'BRN', '096', 'bn' ],
			['Bulgaria','The Republic of Bulgaria', 'UN member state', 'BG', 'BGR', '100', 'bg' ],
			['Burkina Faso','Burkina Faso', 'UN member state', 'BF', 'BFA', '854', 'bf' ],
			['Burundi','The Republic of Burundi', 'UN member state', 'BI', 'BDI', '108', 'bi' ],
			['Cape Verde', 'The Republic of Cabo Verde', 'UN member state', 'CV', 'CPV', '132', 'cv' ],
			['Cambodia', 'The Kingdom of Cambodia', 'UN member state', 'KH', 'KHM', '116', 'kh' ],
			['Cameroon', 'The Republic of Cameroon', 'UN member state', 'CM', 'CMR', '120', 'cm' ],
			['Canada','Canada', 'UN member state', 'CA', 'CAN', '124', 'ca' ],
			['Central African Republic', 'The Central African Republic','UN member state', 'CF', 'CAF', '140', 'cf' ],
			['Chad','The Republic of Chad', 'UN member state', 'TD', 'TCD', '148', 'td' ],
			['Chile','The Republic of Chile', 'UN member state', 'CL', 'CHL', '152', 'cl' ],
			['China', "The People's Republic of China", 'UN member state', 'CN', 'CHN', '156', 'cn' ],
			['Colombia','The Republic of Colombia', 'UN member state', 'CO', 'COL', '170', 'co' ],
			['Comoros Comoros (the)','The Union of the Comoros','UN member state', 'KM', 'COM', '174', 'km' ],
			['Democratic Republic of the Congo','The Democratic Republic of the Congo','UN member state', 'CD', 'COD', '180', 'cd' ],
			['Republic of the Congo Congo (the)','The Republic of the Congo','UN member state', 'CG', 'COG', '178', 'cg' ],
			['Costa Rica','The Republic of Costa Rica','UN member state', 'CR', 'CRI', '188', 'cr' ],
			['Ivory Coast', "The Republic of Côte d'Ivoire", 'UN member state', 'CI', 'CIV', '384', 'ci' ],
			['Croatia','The Republic of Croatia','UN member state', 'HR', 'HRV', '191', 'hr' ],
			['Cuba','The Republic of Cuba','UN member state', 'CU', 'CUB', '192', 'cu' ],
			['Cyprus','The Republic of Cyprus','UN member state', 'CY', 'CYP', '196', 'cy' ],
			['Czech Republic','The Czech Republic','UN member state', 'CZ', 'CZE', '203', 'cz' ],
			['Denmark','The Kingdom of Denmark','UN member state', 'DK', 'DNK', '208', 'dk' ],
			['Djibouti','The Republic of Djibouti','UN member state', 'DJ', 'DJI', '262', 'dj' ],
			['Dominica','The Commonwealth of Dominica','UN member state', 'DM', 'DMA', '212', 'dm' ],
			['Dominican Republic','The Dominican Republic','UN member state', 'DO', 'DOM', '214', 'do' ],
			['Ecuador','The Republic of Ecuador','UN member state', 'EC', 'ECU', '218', 'ec' ],
			['Egypt','The Arab Republic of Egypt','UN member state', 'EG', 'EGY', '818', 'eg' ],
			['El Salvador','The Republic of El Salvador','UN member state', 'SV', 'SLV', '222', 'sv' ],
			['Equatorial Guinea','The Republic of Equatorial Guinea','UN member state', 'GQ', 'GNQ', '226', 'gq' ],
			['Eritrea Eritrea','The State of Eritrea','UN member state', 'ER', 'ERI', '232', 'er' ],
			['Estonia Estonia','The Republic of Estonia','UN member state', 'EE', 'EST', '233', 'ee' ],
			['Eswatini','The Kingdom of Eswatini','UN member state', 'SZ', 'SWZ', '748', 'sz' ],
			['Ethiopia','The Federal Democratic Republic of Ethiopia','UN member state', 'ET', 'ETH', '231', 'et' ],
			['Fiji','The Republic of Fiji','UN member state', 'FJ', 'FJI', '242', 'fj' ],
			['Finland','The Republic of Finland','UN member state', 'FI', 'FIN', '246', 'fi' ],
			['France','The French Republic','UN member state', 'FR', 'FRA', '250', 'fr' ],
			['Gabon Gabon','The Gabonese Republic','UN member state', 'GA', 'GAB', '266', 'ga' ],
			['Gambia','The Republic of The Gambia','UN member state', 'GM', 'GMB', '270', 'gm' ],
			['Georgia','Georgia','UN member state', 'GE', 'GEO', '268', 'ge' ],
			['Germany','The Federal Republic of Germany','UN member state', 'DE', 'DEU', '276', 'de' ],
			['Ghana','The Republic of Ghana','UN member state', 'GH', 'GHA', '288', 'gh' ],
			['Greece','The Hellenic Republic','UN member state', 'GR', 'GRC', '300', 'gr' ],
			['Grenada','Grenada','UN member state', 'GD', 'GRD', '308', 'gd' ],
			['Guatemala','The Republic of Guatemala','UN member state', 'GT', 'GTM', '320', 'gt' ],
			['Guinea','The Republic of Guinea','UN member state', 'GN', 'GIN', '324', 'gn' ],
			['Guinea-Bissau','Guinea-Bissau 	The Republic of Guinea-Bissau','UN member state', 'GW', 'GNB', '624', 'gw' ],
			['Guyana','The Co-operative Republic of Guyana','UN member state', 'GY', 'GUY', '328', 'gy' ],
			['Haiti','The Republic of Haiti','UN member state', 'HT', 'HTI', '332', 'ht' ],
			['Vatican City','The Holy See','UN observer ',	'VA', 'VAT', '336', 'va' ],
			['Honduras','The Republic of Honduras','UN member state', 'HN', 'HND', '340', 'hn' ],
			['Hungary','Hungary','UN member state', 'HU', 'HUN', '348', 'hu' ],
			['Iceland','Iceland','UN member state', 'IS', 'ISL', '352', 'is' ],
			['India','The Republic of India','UN member state', 'IN', 'IND', '356', 'in' ],
			['Indonesia','The Republic of Indonesia','UN member state', 'ID', 'IDN', '360', 'id' ],
			['Iran','The Islamic Republic of Iran','UN member state', 'IR', 'IRN', '364', 'ir' ],
			['Iraq','The Republic of Iraq','UN member state', 'IQ', 'IRQ', '368', 'iq' ],
			['Ireland','Republic of Ireland','UN member state', 'IE', 'IRL', '372', 'ie' ],
			['Israel','The State of Israel','UN member state', 'IL', 'ISR', '376', 'il' ],
			['Italy','The Italian Republic','UN member state', 'IT', 'ITA', '380', 'it' ],
			['Jamaica','Jamaica','UN member state', 'JM', 'JAM', '388', 'jm' ],
			['Japan','Japan','UN member state', 'JP', 'JPN', '392', 'jp' ],
			['Jordan','The Hashemite Kingdom of Jordan','UN member state', 'JO', 'JOR', '400', 'jo' ],
			['Kazakhstan','The Republic of Kazakhstan','UN member state', 'KZ', 'KAZ', '398', 'kz' ],
			['Kenya','The Republic of Kenya','UN member state', 'KE', 'KEN', '404', 'ke' ],
			['Kiribati','The Republic of Kiribati','UN member state', 'KI', 'KIR', '296', 'ki' ],
			['North Korea',"The Democratic People's Republic of Korea", 'UN member state', 'KP', 'PRK', '408', 'kp' ],
			['South Korea','The Republic of Korea','UN member state', 'KR', 'KOR', '410', 'kr' ],
			['Kuwait','The State of Kuwait','UN member state', 'KW', 'KWT', '414', 'kw' ],
			['Kyrgyzstan','The Kyrgyz Republic','UN member state', 'KG', 'KGZ', '417', 'kg' ],
			['Laos',"The Lao People's Democratic Republic",'UN member state', 'LA', 'LAO', '418', 'la' ],
			['Latvia','The Republic of Latvia','UN member state', 'LV', 'LVA', '428', 'lv' ],
			['Lebanon','The Lebanese Republic','UN member state', 'LB', 'LBN', '422', 'lb' ],
			['Lesotho','The Kingdom of Lesotho','UN member state', 'LS', 'LSO', '426', 'ls' ],
			['Liberia','The Republic of Liberia','UN member state', 'LR', 'LBR', '430', 'lr' ],
			['Libya','The State of Libya','UN member state', 'LY', 'LBY', '434', 'ly' ],
			['Liechtenstein','The Principality of Liechtenstein','UN member state', 'LI', 'LIE', '438', 'li' ],
			['Lithuania','The Republic of Lithuania','UN member state', 'LT', 'LTU', '440', 'lt' ],
			['Luxembourg','The Grand Duchy of Luxembourg','UN member state', 'LU', 'LUX', '442', 'lu' ],
			['North Macedonia','Republic of North Macedonia','UN member state', 'MK', 'MKD', '807', 'mk' ],
			['Madagascar','The Republic of Madagascar','UN member state', 'MG', 'MDG', '450', 'mg' ],
			['Malawi Malawi','The Republic of Malawi','UN member state', 'MW', 'MWI', '454', 'mw' ],
			['Malaysia Malaysia','Malaysia','UN member state', 'MY', 'MYS', '458', 'my' ],
			['Maldives Maldives','The Republic of Maldives','UN member state', 'MV', 'MDV', '462', 'mv' ],
			['Mali','The Republic of Mali','UN member state', 'ML', 'MLI', '466', 'ml' ],
			['Malta','The Republic of Malta','UN member state', 'MT', 'MLT', '470', 'mt' ],
			['Marshall Islands','The Republic of the Marshall Islands','UN member state', 'MH', 'MHL', '584', 'mh' ],
			['Mauritania','The Islamic Republic of Mauritania','UN member state', 'MR', 'MRT', '478', 'mr' ],
			['Mauritius','The Republic of Mauritius','UN member state', 'MU', 'MUS', '480', 'mu' ],
			['Mexico','The United Mexican States','UN member state', 'MX', 'MEX', '484', 'mx' ],
			['Micronesia','The Federated States of Micronesia','UN member state', 'FM', 'FSM', '583', 'fm' ],
			['Moldova','The Republic of Moldova','UN member state', 'MD', 'MDA', '498', 'md' ],
			['Monaco','The Principality of Monaco','UN member state', 'MC', 'MCO', '492', 'mc' ],
			['Mongolia','The State of Mongolia','UN member state', 'MN', 'MNG', '496', 'mn' ],
			['Montenegro','Montenegro','UN member state', 'ME', 'MNE', '499', 'me' ],
			['Morocco','The Kingdom of Morocco','UN member state', 'MA', 'MAR', '504', 'ma' ],
			['Mozambique','The Republic of Mozambique','UN member state', 'MZ', 'MOZ', '508', 'mz' ],
			['Myanmar','The Republic of the Union of Myanmar','UN member state', 'MM', 'MMR', '104', 'mm' ],
			['Namibia','The Republic of Namibia','UN member state', 'NA', 'NAM', '516', 'na' ],
			['Nauru','The Republic of Nauru','UN member state', 'NR', 'NRU', '520', 'nr' ],
			['Nepal','The Federal Democratic Republic of Nepal','UN member state', 'NP', 'NPL', '524', 'np' ],
			['Netherlands','The Kingdom of the Netherlands','UN member state', 'NL', 'NLD', '528', 'nl' ],
			['New Zealand','New Zealand','UN member state', 'NZ', 'NZL', '554', 'nz' ],
			['Nicaragua','The Republic of Nicaragua','UN member state', 'NI', 'NIC', '558', 'ni' ],
			['Niger','The Republic of the Niger','UN member state', 'NE', 'NER', '562', 'ne' ],
			['Nigeria','The Federal Republic of Nigeria','UN member state', 'NG', 'NGA', '566', 'ng' ],
			['Norway','The Kingdom of Norway','UN member state', 'NO', 'NOR', '578', 'no' ],
			['Oman','The Sultanate of Oman','UN member state', 'OM', 'OMN', '512', 'om' ],
			['Pakistan','The Islamic Republic of Pakistan','UN member state', 'PK', 'PAK', '586', 'pk' ],
			['Palau','The Republic of Palau','UN member state', 'PW', 'PLW', '585', 'pw' ],
			['Palestine','The State of Palestine','UN observer ',	'PS', 'PSE', '275', 'ps' ],
			['Panama','The Republic of Panamá','UN member state', 'PA', 'PAN', '591', 'pa' ],
			['Papua New Guinea','The Independent State of Papua New Guinea','UN member state', 'PG', 'PNG', '598', 'pg' ],
			['Paraguay','The Republic of Paraguay','UN member state', 'PY', 'PRY', '600', 'py' ],
			['Peru Peru','The Republic of Perú','UN member state', 'PE', 'PER', '604', 'pe' ],
			['Philippines','The Republic of the Philippines','UN member state', 'PH', 'PHL', '608', 'ph' ],
			['Poland','The Republic of Poland','UN member state', 'PL', 'POL', '616', 'pl' ],
			['Portugal','The Portuguese Republic','UN member state', 'PT', 'PRT', '620', 'pt' ],
			['Qatar','The State of Qatar','UN member state', 'QA', 'QAT', '634', 'qa' ],
			['Romania','Romania','UN member state', 'RO', 'ROU', '642', 'ro' ],
			['Russia','The Russian Federation','UN member state', 'RU', 'RUS', '643', 'ru' ],
			['Rwanda','The Republic of Rwanda','UN member state', 'RW', 'RWA', '646', 'rw' ],
			['Saint Kitts and Nevis','Saint Kitts and Nevis','UN member state', 'KN', 'KNA', '659', 'kn' ],
			['Saint Lucia','Saint Lucia','UN member state', 'LC', 'LCA', '662', 'lc' ],
			['Saint Vincent and the Grenadines','Saint Vincent and the Grenadines','UN member state', 'VC', 'VCT', '670', 'vc' ],
			['Samoa','The Independent State of Samoa','UN member state', 'WS', 'WSM', '882', 'ws' ],
			['San Marino','The Republic of San Marino','UN member state', 'SM', 'SMR', '674', 'sm' ],
			['São Tomé and Príncipe','The Democratic Republic of São Tomé and Príncipe','UN member state', 'ST', 'STP', '678', 'st' ],
			['Saudi Arabia','The Kingdom of Saudi Arabia','UN member state', 'SA', 'SAU', '682', 'sa' ],
			['Senegal','The Republic of Senegal','UN member state', 'SN', 'SEN', '686', 'sn' ],
			['Serbia','The Republic of Serbia','UN member state', 'RS', 'SRB', '688', 'rs' ],
			['Seychelles','The Republic of Seychelles','UN member state', 'SC', 'SYC', '690', 'sc' ],
			['Sierra Leone','The Republic of Sierra Leone','UN member state', 'SL', 'SLE', '694', 'sl' ],
			['Singapore','The Republic of Singapore','UN member state', 'SG', 'SGP', '702', 'sg' ],
			['Slovakia','The Slovak Republic','UN member state', 'SK', 'SVK', '703', 'sk' ],
			['Slovenia','The Republic of Slovenia','UN member state', 'SI', 'SVN', '705', 'si' ],
			['Solomon Islands','The Solomon Islands','UN member state', 'SB', 'SLB', '090', 'sb' ],
			['Somalia','The Federal Republic of Somalia','UN member state', 'SO', 'SOM', '706', 'so' ],
			['South Africa','The Republic of South Africa','UN member state', 'ZA', 'ZAF', '710', 'za' ],
			['South Sudan','The Republic of South Sudan','UN member state', 'SS', 'SSD', '728', 'ss' ],
			['Spain','The Kingdom of Spain','UN member state', 'ES', 'ESP', '724', 'es' ],
			['Sri Lanka','The Democratic Socialist Republic of Sri Lanka','UN member state', 'LK', 'LKA', '144', 'lk' ],
			['Sudan','The Republic of the Sudan','UN member state', 'SD', 'SDN', '729', 'sd' ],
			['Suriname','The Republic of Suriname','UN member state', 'SR', 'SUR', '740', 'sr' ],
			['Sweden','The Kingdom of Sweden','UN member state', 'SE', 'SWE', '752', 'se' ],
			['Switzerland','The Swiss Confederation','UN member state', 'CH', 'CHE', '756', 'ch' ],
			['Syria','The Syrian Arab Republic','UN member state', 'SY', 'SYR', '760', 'sy' ],
			['Tajikistan','The Republic of Tajikistan','UN member state', 'TJ', 'TJK', '762', 'tj' ],
			['Tanzania','The United Republic of Tanzania','UN member state', 'TZ', 'TZA', '834', 'tz' ],
			['Thailand','The Kingdom of Thailand','UN member state', 'TH', 'THA', '764', 'th' ],
			['Timor-Leste','The Democratic Republic of Timor-Leste','UN member state', 'TL', 'TLS', '626', 'tl' ],
			['Togo','The Togolese Republic','UN member state', 'TG', 'TGO', '768', 'tg' ],
			['Tonga','The Kingdom of Tonga','UN member state', 'TO', 'TON', '776', 'to' ],
			['Trinidad and Tobago','The Republic of Trinidad and Tobago','UN member state', 'TT', 'TTO', '780', 'tt' ],
			['Tunisia','The Republic of Tunisia','UN member state', 'TN', 'TUN', '788', 'tn' ],
			['Turkey','The Republic of Turkey','UN member state', 'TR', 'TUR', '792', 'tr' ],
			['Turkmenistan','Turkmenistan','UN member state', 'TM', 'TKM', '795', 'tm' ],
			['Tuvalu','Tuvalu','UN member state', 'TV', 'TUV', '798', 'tv' ],
			['Uganda','The Republic of Uganda','UN member state', 'UG', 'UGA', '800', 'ug' ],
			['Ukraine','Ukraine','UN member state', 'UA', 'UKR', '804', 'ua' ],
			['United Arab Emirates','The United Arab Emirates','UN member state', 'AE', 'ARE', '784', 'ae' ],
			['United Kingdom','The United Kingdom of Great Britain and Northern Ireland','UN member state', 'GB', 'GBR', '826', 'uk' ],
			['United States','The United States of America','UN member state', 'US', 'USA', '840', 'us' ],
			['Uruguay','The Oriental Republic of Uruguay','UN member state', 'UY', 'URY', '858', 'uy' ],
			['Uzbekistan','The Republic of Uzbekistan','UN member state', 'UZ', 'UZB', '860', 'uz' ],
			['Vanuatu','The Republic of Vanuatu','UN member state', 'VU', 'VUT', '548', 'vu' ],
			['Venezuela','The Bolivarian Republic of Venezuela','UN member state', 'VE', 'VEN', '862', 've' ],
			['Vietnam','The Socialist Republic of Viet Nam','UN member state', 'VN', 'VNM', '704', 'vn' ],
			['Yemen','The Republic of Yemen','UN member state', 'YE', 'YEM', '887', 'ye' ],
			['Zambia','The Republic of Zambia','UN member state', 'ZM', 'ZMB', '894', 'zm' ],
			['Zimbabwe','The Republic of Zimbabwe','UN member state', 'ZW', 'ZWE', '716', 'zw' ],
		];

		foreach ($countries as $country_array) {
			$country = new Country();
			$country->name = $country_array[0];
			$country->name_full = $country_array[1];
			$country->iso_2 = $country_array[3];
			$country->iso_3 = $country_array[4];
			$country->numeric = $country_array[5];
			$country->tld = $country_array[6];
			$country->save();
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}
}