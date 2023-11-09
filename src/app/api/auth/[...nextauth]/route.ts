import authenticate from "@/services/authService";
import NextAuth from "next-auth";
import type { AuthOptions } from "next-auth";
import CredentialsProvider from "next-auth/providers/credentials";
import FacebookProvider from "next-auth/providers/facebook";
import GoogleProvider from "next-auth/providers/google";

export const authOptions: AuthOptions = {
  providers: [
    // CredentialsProvider({
    //   name: "Credentials",
    //   credentials: {
    //     email: { label: "Email", type: "text" },
    //     password: { label: "Password", type: "password" },
    //   },
    //   async authorize(credentials, req) {
    //     if (typeof credentials !== "undefined") {
    //       const res = await authenticate(
    //         credentials.email,
    //         credentials.password
    //       );
    //       if (typeof res !== "undefined") {
    //         return { ...res.user, apiToken: res.token };
    //       } else {
    //         return null;
    //       }
    //     } else {
    //       return null;
    //     }
    //   },
    // }),
    GoogleProvider({
      clientId: process.env.GOOGLE_CLIENT_ID!,
      clientSecret: process.env.GOOGLE_CLIENT_SECRET!,
    }),
    FacebookProvider({
      clientId: process.env.FACEBOOK_CLIENT_ID!,
      clientSecret: process.env.FACEBOOK_CLIENT_SECRET!,
    }),
  ],

  secret: process.env.SECRET!,
};

const handler = NextAuth(authOptions);

export { handler as GET, handler as POST };
