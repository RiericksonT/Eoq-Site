const path = require('path')
/** @type {import('next').NextConfig} */
const nextConfig = {
  reactStrictMode: true,
  swcMinify: true,
}

module.exports = {
  ...nextConfig,
  webpack: (config,
    { buildId, dev, isServer, defaultLoaders, nextRuntime, webpack }) => {
    config.resolve.alias = {
      ...config.resolve.alias,
      '@': path.resolve(__dirname),
      '@/components': path.resolve(__dirname, 'components'),
      '@/layouts': path.resolve(__dirname, 'layouts'),
      '@/pages': path.resolve(__dirname, 'pages'),
      '@/styles': path.resolve(__dirname, 'styles'),
      '@/assets': path.resolve(__dirname, 'assets'),
    }
    return config
  },
}