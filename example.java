import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class MadhyamikResultFetcher {
    public static void main(String[] args) throws Exception {
        String url = "https://api.linkpc.net/WBBSE/Madhyamik-Results/?roll_no=601382N0010&dob=2008-08-14";
        HttpURLConnection conn = (HttpURLConnection) new URL(url).openConnection();
        conn.setRequestMethod("GET");

        BufferedReader in = new BufferedReader(new InputStreamReader(conn.getInputStream()));
        String inputLine;
        StringBuilder response = new StringBuilder();

        while ((inputLine = in.readLine()) != null)
            response.append(inputLine);
        in.close();

        System.out.println("Response: " + response.toString());
    }
}
