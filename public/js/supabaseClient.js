import { createClient } from "https://esm.sh/@supabase/supabase-js@2";

const supabaseUrl = "https://tucffzhwwvelzaziazer.supabase.co";
const supabaseAnonKey =
    "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InR1Y2Zmemh3d3ZlbHphemlhemVyIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NjIzMTcwODIsImV4cCI6MjA3Nzg5MzA4Mn0.GVakiA2g5EnhYvNH2Weatd8gLjkjUiOIQ1etir74MV4";

export const supabase = createClient(supabaseUrl, supabaseAnonKey);
