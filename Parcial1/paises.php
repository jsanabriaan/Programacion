<?php
 
                        $client = new SoapClient("http://www.webservicex.net/country.asmx?WSDL");
                        $result = $client->GetCountries();
                        $xml = $result->GetCountriesResult;

                        $xml = simplexml_load_string($xml);
                        foreach ($xml->Table as $table) {
                            $output .="<option>$table->Name</option>";
                        }
                        echo ($output);
                    ?>