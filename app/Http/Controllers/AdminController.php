<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdminRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

/**
 * @OA\Tag(
 *     name="Admin",
 *     description="Admin management endpoints"
 * )
 */
class AdminController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/admin/create",
     *     summary="Create a new admin user",
     *     tags={"Admin"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "email", "password"},
     *             @OA\Property(property="name", type="string", example="Admin User"),
     *             @OA\Property(property="email", type="string", format="email", example="admin2@university.edu"),
     *             @OA\Property(property="password", type="string", format="password", example="securepass123"),
     *             @OA\Property(property="password_confirmation", type="string", format="password", example="securepass123")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Admin user created successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Admin user created successfully"),
     *             @OA\Property(property="user", type="object",
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="name", type="string", example="Admin User"),
     *                 @OA\Property(property="email", type="string", example="admin2@university.edu"),
     *                 @OA\Property(property="role", type="string", example="admin")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthenticated"
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Forbidden"
     *     )
     * )
     */
    public function createAdmin(CreateAdminRequest $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin'
        ]);

        return response()->json([
            'message' => 'Admin user created successfully',
            'user' => $user
        ], 201);
    }
}
