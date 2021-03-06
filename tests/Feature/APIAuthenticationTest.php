<?php

namespace Tests\Feature;



use Tests\TestCase;
use App\User;
use App\Country;




class APIAuthenticationTest extends TestCase
{

    public function testGeneratingAPIToken()
    {
        $data = [
            "email" => 'test@gmail.com',
            "website" => "http://www.testing.com",
        ];

        $this->json('POST', 'request-access-token/generate-token', $data, ['Accept' => 'application/json'])
            ->assertSessionHas('success',"Api Access Token has been sent to your email successfully.");

        $user = User::where('email',$data['email'])->first();

        $this->assertDatabaseHas('users', [
            'id' => $user->id
        ]);

    }
    public function testAccessingAPIWithoutAuthenticationFails()
    {
        $data=array(
            'message' =>'Unauthenticated. Visit https://www.restfulcountries.com/request-access-token to generate token. See documentation for more details.'
        );
        $this->get('/api/v1/countries')->assertStatus(401)->assertJsonFragment($data);
        $this->get('/api/v1/countries/Nigeria/presidents')->assertStatus(401)->assertJsonFragment($data);
        $this->get('/api/v1/countries/Nigeria/states')->assertStatus(401)->assertJsonFragment($data);

    }
    public function testAccessingAPIWithAuthenticationSucceeds()
    {

        $country = Country::inRandomOrder()->first();
        factory(User::class,2)->create()->each(function ($user) use ($country) {

            $token = $user->createToken('authToken')->plainTextToken;
            $this->get('/api/v1/countries/'.$country->name, ['Authorization' => 'Bearer ' . $token])
                ->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'name',
                        'full_name',
                        'capital',
                        'iso2',
                        'iso3',
                        'covid19' => [
                            'total_case',
                            'total_deaths',
                            'last_updated',
                        ],
                        'current_president' => [
                            'name',
                            'gender',
                            'appointment_start_date',
                            'appointment_end_date',
                            'href' => [
                                'self',
                                'country',
                                'picture'
                            ],
                        ],
                        'currency',
                        'phone_code',
                        'continent',
                        'description',
                        'size',
                        'independence_date',
                        'population',
                        'href' => [
                            'self',
                            'states',
                            'presidents',
                            'flag'
                        ],
                    ]
                ]);
        });
    }

}
