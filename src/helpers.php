<?php 

use Currency\Models\Currency;

if (! function_exists('getAllCurrencies')) {

    function getAllCurrencies()
    {
        return Currency::all();
    }
}

if (! function_exists('getAllActiveCurrencies')) {

    function getAllActiveCurrencies()
    {   
        return Currency::where('status', 1)->get();
    }
}

if (! function_exists('getDefaultCurrency')) {

    function getDefaultCurrency()
    {
        return Currency::where('default', 1)->first();
    }
}

if (! function_exists('getCurrencyById')) {

    function getCurrencyById($id)
    {
        return Currency::findOrFail($id);
    }
}

if (! function_exists('getCurrencyByIso')) {

    function getCurrencyByIso($iso)
    {
        return Currency::where('iso', $iso)->first();
    }
}

if (! function_exists('getCurrencyByCode')) {

    function getCurrencyByCode($code)
    {
        return Currency::where('code', $code)->first();
    }
}

if (! function_exists('destroyCurrencyById')) {

    function destroyCurrencyById($id)
    {   
        return $this->getCurrencyById($id)->delete();
    }
}

if (! function_exists('destroyCurrencyByIso')) {

    function destroyCurrencyByIso($iso)
    {
        return $this->getCurrencyByIso($iso)->delete();
    }
}

if (! function_exists('destroyCurrencyByCode')) {

    function destroyCurrencyByCode($code)
    {
        return $this->getCurrencyByCode($code)->delete();
    }
}

if (! function_exists('changeDefaultCurrencyById')) {

    function changeDefaultCurrencyById($id)
    {
        return $this->changeDefaultCurrency($this->getDefaultCurrency(), $this->getCurrencyById($id));
    }
}

if (! function_exists('changeDefaultCurrencyByIso')) {

    function changeDefaultCurrencyByIso($iso)
    {
        return $this->changeDefaultCurrency($this->getDefaultCurrency(), $this->getCurrencyByIso($iso));
    }
}

if (! function_exists('changeDefaultCurrencyByCode')) {

    function changeDefaultCurrencyByCode($code)
    {
        return $this->changeDefaultCurrency($this->getDefaultCurrency(), $this->getCurrencyByCode($code));
    }
}

if (! function_exists('changeDefaultCurrency')) {

    function changeDefaultCurrency($actualDefaultCurrency, $currencyToBeUpdated)
    {
        $actualDefaultCurrency->update(['default', 0]);
        
        return $currencyToBeUpdated->update(['default', 1]);
    }
}