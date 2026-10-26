<?php

namespace Tests\Feature;

use Tests\TestCase;

class EducationPageTest extends TestCase
{
    /**
     * Test halaman education dapat diakses dan memuat data sertifikat & pencapaian.
     */
    public function test_education_page_returns_successful_response(): void
    {
        $response = $this->get('/education');

        $response->assertStatus(200);
        $response->assertSee('Sertifikat Kompetensi', false);
        $response->assertSee('Penghargaan', false);
        $response->assertSee('Dicoding Indonesia', false);
        $response->assertSee('Badan Nasional Sertifikasi Profesi', false);
        $response->assertSee('DCD-2024-LARAVEL-9821', false);
        $response->assertSee('Finalis Web Development Competition Nasional', false);
    }
}
