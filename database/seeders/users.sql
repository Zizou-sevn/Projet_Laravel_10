
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'foo', 'foo@example.com', NULL, '$2y$12$RYIA1FyZhvWZyUFSHbNnM.iUT7SCidcU41JqxqFKdQEIcB/pFnP7m', NULL, '2024-02-09 10:41:20', '2024-02-09 10:41:20'),
(2, 'admin', 'admin@exemple', NULL, '$2y$12$dI6iVhI24mfpzYiiFS/TLeTU3AFfartj9btv0UGl1thceBqoD9zTm', NULL, '2024-02-09 15:34:29', '2024-02-09 15:34:29');
COMMIT;