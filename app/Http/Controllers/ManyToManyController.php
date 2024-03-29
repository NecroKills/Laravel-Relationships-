<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

class ManyToManyController extends Controller
{
    public function manyToMany()
    {
      $city = City::where('name', 'Anápolis')->get()->first();
      echo "<b>{$city->name}:</b><br><br>";

      $companies = $city->companies;
      foreach ($companies as $company) {
        echo " {$company->name},";
      }
    }

    public function manyToManyInverse()
    {
      $company = Company::where('name', 'SuperVi')->get()->first();
      echo "<b>{$company->name}:</b><br><br>";

      $cities = $company->cities;
      foreach ($cities as $city) {
        echo " {$city->name},";
      }
    }
}
