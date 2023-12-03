module.exports = {
    root: true,
    extends: ["plugin:tailwindcss/recommended"],
    overrides: [
        {
            files: ['*.html', '*.blade.php'],
            parser: '@angular-eslint/template-parser',
        },
    ],
    rules: {
        "tailwindcss/no-custom-classname": ["warn", {
            cssFiles: [
                "resources/css/app.css",
                "node_modules/@fortawesome/fontawesome-free/css/all.css",
            ]
        }],
    },
    parserOptions: {
        sourceType: "module",
        ecmaVersion: 2015,
    },
};
