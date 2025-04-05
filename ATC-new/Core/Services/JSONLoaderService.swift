actor JSONLoaderService {
    static let shared = JSONLoaderService()
    private var cache: [String: Any] = [:]
    
    func loadJSON<T: Decodable>(_ filename: String) async throws -> T {
        // Check cache first
        if let cached = cache[filename] as? T {
            return cached
        }
        
        guard let url = Bundle.main.url(forResource: filename, withExtension: "json") else {
            throw URLError(.fileDoesNotExist)
        }
        
        let data = try Data(contentsOf: url)
        let decoder = JSONDecoder()
        let decodedData = try decoder.decode(T.self, from: data)
        
        // Cache the result
        cache[filename] = decodedData
        
        return decodedData
    }
    
    func clearCache() {
        cache.removeAll()
    }
} 