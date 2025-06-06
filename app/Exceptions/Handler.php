<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $exception)
{
    // Cek apakah permintaan datang dari API
    // atau apakah request mengharapkan response JSON
    if ($request->expectsJson() || $request->is('api/*')) {
        // Tangani Exception spesifik untuk API
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
            return response()->json(['message' => 'Endpoint not found!'], 404);
        }

        if ($exception instanceof \Symfony\Component\Routing\Exception\MethodNotAllowedException) {
             // Dalam kasus 405 Method Not Allowed
             // Exception ini tidak selalu membawa informasi metode yang didukung secara langsung dalam pesan default
             // Tapi kita tahu ini 405
            return response()->json(['message' => 'Method Not Allowed for this endpoint.'], 405);
        }


    }

    return parent::render($request, $exception);
}
}
