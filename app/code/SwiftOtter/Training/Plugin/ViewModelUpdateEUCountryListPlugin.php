<?php
declare(strict_types=1);
namespace SwiftOtter\Training\Plugin;

class ViewModelUpdateEUCountryListPlugin
{
    public function afterGetListOfEUCountries(\SwiftOtter\Training\ViewModel\ViewModel $subject, array $countryList): array
    {
        $countryList = array_merge(array_diff($countryList, ['UK']), ['Ukraine']);
        sort($countryList);

        return $countryList;
    }
}
